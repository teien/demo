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

}
