<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
}
