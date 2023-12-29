<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
class OrderDetails extends Model
{
    use HasFactory;
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
