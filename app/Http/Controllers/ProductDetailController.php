<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Products;
class ProductDetailController extends Controller
{
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
