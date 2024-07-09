<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
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

}
