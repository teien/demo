<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetails;
class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class,'order_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    protected $fillable = [
        'fullname',
        'address',
        'phone',
        'email',
        'amount',
        'status',
        'user_id',
    ];
    protected $table = 'orders';


    protected static function boot()
    {
        parent::boot();


        static::saved(function ($order) {
            if ($order->isDirty('status') && $order->status == 0) {
                // Trạng thái là 0 (giao hàng thất bại)
                $order->updateProductQuantity();
            }
        });
    }


    // Hàm cập nhật quantity trong bảng products
    public function updateProductQuantity()
    {
        foreach ($this->orderDetails as $orderDetail) {
            $product = $orderDetail->product;

            if ($product) {
                $product->quantity += $orderDetail->quantity;
                $product->save();
            }
        }
    }
}

