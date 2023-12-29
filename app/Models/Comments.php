<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'product_id' , 'comments'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
