<?php
namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Show the form for creating a new cat.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('createCats');
    }

    /**
     * Store a newly created cat in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'breed' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:255',
            'gender' => 'required|in:male,female',
            'issues_with_kids' => 'boolean',
            'issues_with_other_cats' => 'boolean',
            'issues_with_dogs' => 'boolean',
            'no_issues' => 'boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $cat = new Cat($request->all());

        if ($request->hasFile('image')) {
            $cat->image = $request->file('image')->store('image', 'public');
        }

        $cat->save();

        return redirect()->route('cats.create')->with('success', 'Cat added successfully');
    }

    /**
     * Display a listing of the cats.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cats = Cat::all();
        return view('catsIndex', compact('cats'));
    }
}
