<?php


namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use Darryldecode\Cart\Facades\CartFacade as Cart;


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
            'coupon' => 'nullable',
        ]);

        $order = Order::create([
            'fullname' => $validatedData['fullname'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'amount' => $validatedData['amount'],
            'email' => $validatedData['email'],
            'status' => '0',
        ]);
        $order->save();
        $order_id = $order->id;
        session(['current_order_id' => $order_id]);
        $selectedProducts = session('selectedProducts', []);
        foreach ($selectedProducts as $product) {
            if (isset($product['id'], $product['price'], $product['quantity'])) {
                $existingProduct = Products::find($product['id']);
                if ($existingProduct) {
                    OrderDetails::create([
                        'product_id' => $product['id'],
                        'order_id' => $order_id,
                        'price' => $product['price'],
                        'quantity' => $product['quantity'],
                        'fullname' => $validatedData['fullname'] ?? '',
                    ]);
                    Cart::remove($product['id']);
                    $this->updateStock($product['id'], $product['quantity']);
                }
            }
        }
    }
    protected function updateStock($productId, $quantity)
    {
        $product = Products::find($productId);
        $order = Order::find(session('current_order_id'));
        if ($product->quantity >= $quantity) {
            $product->quantity -= $quantity;
            $product->save();
            $order->status = 1;
            $order->save();
        } else {
            return response()->json('Sản phẩm không đủ số lượng, mong bạn thông cảm!');
        }
    }

    public function checkoutSuccess()
    {
        $order = Order::find(session('current_order_id'));
        if ($order->status == 0) {
            return view('alert.errorOrder');
        } else {
            $orderDetails = OrderDetails::where('order_id', session('current_order_id'))->get();
            return view('alert.sucessOrder', compact('order', 'orderDetails'));
        }
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
