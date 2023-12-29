<?php


namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function checkout(Request $request)
    {
        // Lấy selectedProducts từ request
        $selectedProducts = $request->input('selectedProducts');

        // Lưu vào session
        session(['selectedProducts' => $selectedProducts]);
        return response()->json(['message' => 'Purchase successful']);
    }

    public function checkoutList()
    {

        $selectedProducts = session('selectedProducts', []);

        $products = Products::all();
        if (empty($selectedProducts)) {
            return redirect()->route('home');
        }
        return view('product.checkout', compact('selectedProducts', 'products'));
    }




    public function storeCheckout(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'amount' => 'required',
            'email' => 'required|email',
        ]);

        $order = Order::create([
            'fullname' => $validatedData['fullname'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'amount' => $validatedData['amount'],
            'email' => $validatedData['email'],
        ]);


        $selectedProducts = session('selectedProducts', []);
        foreach ($selectedProducts as $product) {
            OrderDetails::create([
                'product_id' => $product['id'],
                'order_id' => $order->id,
                'price' => $product['price'], // Tùy thuộc vào cách bạn lưu giá sản phẩm
                'quantity' => $product['quantity'],
                'fullname' => $validatedData['fullname'],
            ]);
        }

        return response()->json('done');
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
