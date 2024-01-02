<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon' => 'required|string',
        ]);
        $couponCode = $request->input('coupon');
        $checkCoupon = DB::table('coupons')->where('coupon_code', $couponCode)->first();
        if ($checkCoupon == null) {
            session()->flash('error', 'Coupon is not Valid !');
            return redirect()->route('cart.list');
        } else {
            $checkCoupon->expiration_date = Carbon::parse($checkCoupon->expiration_date)->format('Y-m-d');
            $currentDate = Carbon::now()->format('Y-m-d');

            if ($checkCoupon->expiration_date >= $currentDate) {
                return redirect()->back()->with('success', 'Coupon áp dụng thành công!')->with(['couponCode' => $couponCode, 'discount_amount' => $checkCoupon->discount_amount]);
            } else {
                return redirect()->back()->with('error', 'Coupon hết hạn.');
            }
        }
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'img_link' => $request->img_link,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
    }
    public function getTotalQuantity()
    {
        $totalQuantity = Cart::getTotalQuantity();
        return response()->json(['total_quantity' => $totalQuantity]);
    }
    public function updateCart(Request $request)
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

}
