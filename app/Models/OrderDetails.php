<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
class OrderDetails extends Model
{
    use HasFactory;
    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
    public function products()
{
    return $this->belongsTo(Products::class, 'product_id');
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
