<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Products;
use App\Models\OrderDetails;
use Darryldecode\Cart\Facades\CartFacade as Cart;

use function Laravel\Prompts\alert;

class OrderController extends Controller
{
    public function updateStatusOrder($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return back()->with('error', 'Đơn hàng không tồn tại.');
        }

        // Thực hiện cập nhật trạng thái đơn hàng
        $order->status = 2; // Đã giao hàng thành công
        $order->save();

        return back()->with('success', 'Cập nhật trạng thái đơn hàng thành công!');
    }
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
            'phone' => 'required|numeric|digits:10',
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
            'user_id' => auth()->user()->id,
            'status' => '0',
        ]);

        $order_id = $order->id;
        session(['current_order_id' => $order_id]);
        $selectedProducts = session('selectedProducts', []);
        foreach ($selectedProducts as $product) {

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

        if ($order) {
            if ($order->status == 0) {
                return view('alert.errorOrder');
            } elseif ($order->status == null) {
                return view('alert.errorOrder', ['message' => 'Đơn hàng không tồn tại']);
            } else {
                $orderDetails = OrderDetails::where('order_id', session('current_order_id'))->get();
                return view('alert.sucessOrder', compact('order', 'orderDetails'));
            }
        } else {
            return view('alert.errorOrder', ['message' => 'Đơn hàng không tồn tại']);
        }
    }
}
