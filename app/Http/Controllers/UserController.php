<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Products;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if (Auth::check()) {
            $name = $user->name;
        }
        return view('dashboard', compact('name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ordersList()
    {
        $email = Auth::user()->email;
        $order_id = Order::where('email', $email)->pluck('id');
        $orderDetails = OrderDetails::whereIn('order_id', $order_id)->get();
        return view('profile.user_orders', compact('orderDetails','order_id'));
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
