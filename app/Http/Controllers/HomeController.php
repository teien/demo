<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::where('is_visible', true)->where('quantity', '>', 0)->get();

        return view('home', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */

}
