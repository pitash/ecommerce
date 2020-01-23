<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category');
            $table->integer('sub_cate');
            $table->string('product_name');
            $table->string('slug');
            $table->double('regular_price');
            $table->double('discount_percent');
            $table->double('old_price');
            $table->double('product_quantity');
            $table->longText('pro_detail');
            $table->string('pro_image')->default("product_img/product-6.jpg");
            $table->string('color');
            $table->string('size');
            $table->integer('created_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
