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


        // Sự kiện creating được gọi trước khi một bản ghi mới được tạo
        static::creating(function ($product) {
            // Kiểm tra và thay đổi đường dẫn img_link nếu cần thiết
            $product->checkAndUpdateImgLink();
        });
    }

    // Hàm kiểm tra và cập nhật img_link
    public function checkAndUpdateImgLink()
    {
        // Kiểm tra điều kiện cần thiết, ví dụ:
        if (!str_starts_with($this->img_link, 'storage/')) {
            // Thay đổi đường dẫn nếu không bắt đầu bằng 'img/'
            $this->img_link = 'storage/' . $this->img_link;
        }
    }
}

