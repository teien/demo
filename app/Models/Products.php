<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'content',
        'price',
        'amout',
        'img_link',
        'CATALOG_ID',
    ];
}
