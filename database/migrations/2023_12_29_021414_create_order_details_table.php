<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained(); // Ràng buộc khóa ngoại đến bảng orders
            $table->foreignId('product_id')->constrained('products'); // Ràng buộc khóa ngoại đến bảng product
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('fullname');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
