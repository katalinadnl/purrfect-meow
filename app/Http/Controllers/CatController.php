<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use Illuminate\View\View;

class CatController extends Controller
{
    /**
     * Display cat view with cats.
     */
    public function carts() : View
    {
        $cats = Cat::paginate(20);
        return view('cats', ['cats' => $cats]);
    }

    /**
     * Display cats information for a given cat.
     */
    public function cat($id_cat) : View
    {
        $cat = Cat::with('race')->where('id_cat', $id_cat)->firstOrFail(); // Replace 'race' with the actual relation name in the Cat model class
        return view('informationCat', ['cat' => $cat]);
    }
}
