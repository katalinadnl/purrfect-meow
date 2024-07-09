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

