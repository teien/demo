<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_code',
        'coupon_type',
        'coupon_amount',
        'coupon_expiry_date',
        'coupon_status',
    ];
    protected $table = 'coupons';
}
