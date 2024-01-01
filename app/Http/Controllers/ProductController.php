<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Caterories;
use App\Models\Comments;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $catalogId = $request->query('catalog');

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
    public function show(string $id)
    {
        $product = Products::where('id', '=', $id)->select('*')->first();
        $catalog_id = $product->catalog_id;
        $sameProducts = Products::where('catalog_id', $catalog_id )->where('is_visible', true)->get();
        $comments = Comments::where('product_id',$product->id)->orderBy('id' , 'DESC')->get();
        return view('product_detail' , compact('product','comments','sameProducts'));
    }

    public function index (){
        return view('product_detail');
    }


    public function post_comment($productID)
    {
        $data = request()->all('comments');
        $data  ['product_id'] = $productID;
        $data ['user_id'] = auth() -> id();
        $data ['username'] = auth() -> user();
        if(Comments::create($data)) {
            return redirect()->back();
        };

        return redirect()->back();
    }



    public function destroy(string $id)
    {
        $comments = Comments::find($id);
        $comments->delete();
        return redirect()->back();
    }


}
