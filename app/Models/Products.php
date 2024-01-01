<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'content',
        'price',
        'amout',
        'img_link',
        'catalog_id',
        'created_at',
        'updated_at'
    ];
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
    protected static function booted()
{
    static::saved(function ($product) {
        if ($product->quantity <= 0) {
            $product->is_visible = false;
            $product->save();
        }
    });
}
}
