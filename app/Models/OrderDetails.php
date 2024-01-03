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
        parent::boot();
        static::updating(function ($orderDetails) {
            if ($orderDetails->order->status !== 0) {
                if ($orderDetails->isDirty('product_id') || $orderDetails->isDirty('quantity')) {
                    $orderDetails->updatePriceFromProduct();
                }
                if ($orderDetails->isDirty('quantity') || $orderDetails->isDirty('product_id')) {
                    $orderDetails->updateQuantityProduct();
                }
                $orderDetails->updateOrderTotalOnUpdate();
            }
        });

        static::updated(function ($orderDetails) {
            if ($orderDetails->order->status !== 0) {
                $orderDetails->updateOrderTotal();
            }
        });

        static::deleting(function ($orderDetails) {
            if ($orderDetails->order->status !== 0) {
                $orderDetails->updateOrderTotalOnDelete();
                $orderDetails->updateQuantityProductOnDelete();
            }
        });

        static::deleted(function ($orderDetails) {
            if ($orderDetails->order->status !== 0) {
                $orderDetails->updateOrderTotal();
            }
        });
    }

        public function updateQuantityProductOnDelete()
        {
            $product = $this->product;

            if ($product) {
                // Lấy giá trị cũ của quantity từ OrderDetails
                $oldQuantity = $this->getOriginal('quantity');
                // Cập nhật quantity cho product
                $product->quantity += $oldQuantity;
                $product->save();
            }
        }
    public function updateOrderTotalOnUpdate()
    {
        $this->updateOrderTotal();
    }

    public function updateOrderTotalOnDelete()
    {
        $this->quantity = 0;
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
    public function updateQuantityProduct()
    {
        $product = $this->product;

        if ($product) {
            // Lấy giá trị mới của quantity từ OrderDetails
            $newQuantity = $this->quantity;

            // Lấy giá trị cũ của quantity từ OrderDetails
            $oldQuantity = $this->getOriginal('quantity');
            // Tính toán sự thay đổi của quantity
            $quantityChange = $newQuantity - $oldQuantity;
            // Cập nhật quantity cho product
            $product->quantity -= $quantityChange;
            $product->save();
        }
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
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
