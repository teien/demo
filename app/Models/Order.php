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
}
