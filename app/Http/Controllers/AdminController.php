<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\CatIssue;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the form for creating a new cat.
     *
     * @return View
     */
    public function createCat(): View
    {
        return view('admin/createCats');
    }

    /**
     * Store a newly created cat in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function storeCat(Request $request): RedirectResponse
    {
        //validation des données
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

        // Création d'un nouveau chat
        $cat = new Cat();
        $cat->breed = $request->input('breed');
        $cat->name = $request->input('name');
        $cat->age = $request->input('age');
        $cat->gender = $request->input('gender');

        // Vérifie si une image a été téléchargé
        $file = $request->file('image');

        if ($file != null) {
            $cat->image = $file->storeAs('image', $file->getClientOriginalName(), 'public');
        } else {
            $cat->image = '';
        }

        $cat->save();

        // Création d'un nouvel objet CatIssue
        $catIssue = new CatIssue();
        $catIssue->cat_id = $cat->id;
        $catIssue->issues_with_kids = $request->input('issues_with_kids', false);
        $catIssue->issues_with_other_cats = $request->input('issues_with_other_cats', false);
        $catIssue->issues_with_dogs = $request->input('issues_with_dogs', false);
        $catIssue->no_issues = $request->input('no_issues', false);
        $catIssue->save();

        // Redirige l'utilisateur vers la page de création de chat avec un message de succès
        return redirect()->route('cats.create')->with('success', 'Chat ajouté avec succès !');
    }
}
