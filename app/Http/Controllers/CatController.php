<?php
namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Sleep;
use Illuminate\View\View;

class CatController extends Controller
{
    /**
     * Show the form for creating a new cat.
     *
     * @return View
     */
    public function create(): View
    {
        return view('createCats');
    }

    /**
     * Store a newly created cat in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'breed' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:255',
            'gender' => 'required|in:male,female',
            'issues_with_kids' => 'boolean',
            'issues_with_other_cats' => 'boolean',
            'issues_with_dogs' => 'boolean',
            'no_issues' => 'boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $cat = new Cat($request->all());

        if (!$request->has('no_issues')) {
            $cat->no_issues = false;
        }

        $file = $request->file('image');

        // Initialize image with a default value
        if ($file != null) {
            $cat->image = $file->storeAs('image', $file->getClientOriginalName(), 'public');
        } else {
            $cat->image = '';
        }

        $cat->save();

        return redirect()->route('cats.create')->with('success', 'Chat ajouté avec succès ! \n' . $cat->image . " yo " . $request->file('image'));
    }

    /**
     * Display a listing of the cats.
     *
     * @return View
     */
    public function index(): View
    {
        $cats = Cat::paginate(3);
        return view('catsIndex', ['cats' => $cats]);
    }
    /**
     * Display the specified cat.
     *
     * @param  int  $id
     * @return View
     */
    public function information(int $id): View
    {
        $cat = Cat::findOrFail($id);
        return view('informationCat', compact('cat'));
    }
}

