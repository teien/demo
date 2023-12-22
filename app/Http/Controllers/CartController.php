<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cartList()
    {
        $cartItems = Cart::getContent();
        return view('product.cart', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        // Xử lý dữ liệu và thêm vào giỏ hàng ở đây
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $quantity = $request->quantity;
        $img_link = $request->img_link;
        Cart::add($id, $name, $price, $quantity, $img_link);
        // Trả về phản hồi JSON thay vì chuyển hướng
        return response()->json(['message' => 'Item added to cart successfully']);
    }



    /*  public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'img_link' => $request->img_link,
            )
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    } */
    public function getTotalQuantity()
    {
        $totalQuantity = Cart::getTotalQuantity();
        return response()->json(['total_quantity' => $totalQuantity]);
    }
    /* public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    } */


    public function updateCart(Request $request)
    {
        $productId = $request->id;
        $newQuantity = $request->quantity;

        Cart::update(
            $productId,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $newQuantity
                ],
            ]
        );
        $newTotalPrice = Cart::getTotal();
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return response()->json(['total_price' => $newTotalPrice]);
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
