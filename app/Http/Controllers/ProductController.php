<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Caterories;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $catalogId = $request->query('catalogs');
        $catalog = null;

        // filter  list
        if($catalogId){
            $catalog = Caterories::find($catalogId);
        }
        $products = null;
        if($catalogId){
            $products = Products::where('catalog_id', $catalogId)->get();
        }

        //filter gender & price
        $genderFilter = $request->input('filter_gioi-tinh');
        $priceFilter = $request->input('filter_khoang-gia');

        $products = DB::table('products')->select('*');
        $priceRange = null;
        if ($genderFilter) {
            $products->where('sex','=', $genderFilter);
        }
        if ($priceFilter) {
            $priceRange = explode('-', $priceFilter);
            $products->whereBetween('price', [$priceRange[0], $priceRange[1]]);
        }

        $products = $products->get();

        //search
        $search = $request->input('search');
        $products = DB::table('products')
        ->where('name','LIKE',"%{$search}%")
        ->get();

        return view('product.products', compact('products', 'catalog', 'genderFilter', 'priceFilter', 'priceRange'));
    }

}
