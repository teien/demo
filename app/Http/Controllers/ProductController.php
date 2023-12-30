<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function productList()
    {
        $product=Products::all();
        return view('product.products',compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        return view('product.products');
    }

    public function product(Request $request)
    {
        // Lấy giá trị từ form
        $genderFilter = $request->input('filter_gioi-tinh');
        $priceFilter = $request->input('filter_khoang-gia');

        // Bắt đầu với query cơ bản
        $products = DB::table('products')->select('*');

        // Áp dụng bộ lọc nếu có
        if ($genderFilter) {
            $products->where('sex', $genderFilter);
        }

        if ($priceFilter) {
            // Chia khoảng giá thành mảng min và max
            $priceRange = explode('-', $priceFilter);

            // Áp dụng điều kiện cho khoảng giá
            $products->whereBetween('price', [$priceRange[0], $priceRange[1]]);
        }

        // Lấy kết quả
        $products = $products->get();

        return view('product.products', compact('products'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Products::query()
        ->where('name','LIKE',"%{$search}%")
        ->get();
        return view('product.products',compact('products'));
    }

    public function search2(Request $request)
{
    $searchTerm = $request->input('search2');
    $orderBy = $request->input('orderby', 'price');
    $orderDirection = $orderBy === 'price-desc' ? 'desc' : 'asc';

    $products = Products::where('name', 'like', '%' . $searchTerm . '%')
        ->orderByPrice($orderDirection)
        ->get();

    // Trả về view cùng với giá trị tìm kiếm và các giá trị khác
    return view('product.products', compact('products', 'searchTerm', 'orderBy'));


}
}
