<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('catalog_id')->nullable();
            $table->decimal('price', 15, 0)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('img_link')->nullable();
            $table->text('content')->nullable();
            $table->string('sex', 10)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
