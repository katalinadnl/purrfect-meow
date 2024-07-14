<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CatController extends Controller
{
    /**
     * Display a listing of the cats.
     *
     * @return View
     */
    public function index(): View
    {
        //récupère l'utilisateur connecté
        $user = Auth::user();
        $catsPerPage = 3;

        //si l'utilisateur est un client
        if ($user->role === 0) {
            //appelle la méthode compatibleWithUser du modèle Cat
            $catsQuery = Cat::with('issues')->compatibleWithUser($user);
        } else if ($user->role === 1) {
            // Charge tous les chats avec leurs issues
            $catsQuery = Cat::with('issues');
        } else {
            $catsQuery = Cat::query();
        }

        $cats = $catsQuery->paginate($catsPerPage);

        //retourne la vue catsIndex avec les chats
        return view('dashboard', ['cats' => $cats]);
    }

    /**
     * Display the specified cat.
     *
     * @param  int  $id
     * @return View
     */
    public function information(int $id): View
    {
        //récupère le chat correspondant à l'id
        $cat = Cat::with('issues')->findOrFail($id);
        //retourne la vue informationCat avec le chat en particulier
        return view('informationCat', compact('cat'));
    }

    /**
     * Remove the specified cat from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        // Check if the user is an admin with role 1
        $user = Auth::user();
        if ($user->role !== 1) {
            abort(403, 'Unauthorized action.');
        }

        // Find the cat and delete it
        $cat = Cat::findOrFail($id);
        $cat->delete();

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard')->with('status', 'Cat deleted successfully!');
    }
}
