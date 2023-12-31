<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function updateStatusOrder($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return back()->with('error', 'Đơn hàng không tồn tại.');
        }

        // Thực hiện cập nhật trạng thái đơn hàng
        $order->status = 3; // Đã giao hàng thành công
        $order->save();

        return back()->with('success', 'Cập nhật trạng thái đơn hàng thành công!');
    }
}
