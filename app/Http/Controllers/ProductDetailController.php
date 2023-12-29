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
        return view('product_detail' , compact('product'));
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

    public function comment(Products $product , $id)
    {
        $product = Products::where('id', '=', $id)->select('*')->first();
        $comments = Comments::where('product_id',$product->id)->orderBy('id' , 'DESC')->get();
        return view('product_detail' , compact('product','comments'));
    }


    public function destroy(string $id)
    {
        $comments = Comments::find($id);
        $comments->delete();
        return redirect()->back();
    }

}
