<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderDetails extends Model
{
    use HasFactory;
    protected static function booted()
    {
        static::updating(function ($orderDetails) {

            if ($orderDetails->isDirty('product_id')) {
                $orderDetails->updatePriceFromProduct();
            }
            $orderDetails->updateOrderTotalOnUpdate();
        });

        static::updated(function ($orderDetails) {
            $orderDetails->updateOrderTotal();
        });

        static::deleting(function ($orderDetails) {
            $orderDetails->updateOrderTotalOnDelete();
        });

        static::deleted(function ($orderDetails) {
            $orderDetails->updateOrderTotal();
        });
    }

    public function updateOrderTotalOnUpdate()
    {
        $this->updateOrderTotal();
    }

    public function updateOrderTotalOnDelete()
    {
        $this->quantity = 0; // Set quantity to 0 when deleting
        $this->updateOrderTotal();
    }
    public function updatePriceFromProduct()
    {
        $product = Products::find($this->product_id);
        if ($product) {
            $this->price = $product->price;
        } else {
            // Log an error message if the product is not found
            Log::error('Product with id ' . $this->product_id . ' not found.');
        }
    }
    public function updateOrderTotal()
    {
        $order = $this->order;
        if ($order) {
            $total = $order->orderDetails()->sum(DB::raw('price * quantity'));
            $order->amount = $total;
            $order->save();
        }
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function products()
    {
        return $this->belongsToMany(Products::class)->withPivot('quantity');
    }

    protected $fillable = [
        'fullname',
        'product_id',
        'order_id',
        'price',
        'quantity'
    ];
    protected $table = 'order_details';
}
