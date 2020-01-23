<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_arrivals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent');
            $table->integer('category');
            $table->integer('sub_cate');
            $table->string('att_title');
            $table->string('product_name');
            $table->string('slug');
            $table->double('regular_price');
            $table->double('old_price');
            $table->double('discount_percent');
            $table->string('product_quantity');
            $table->longText('pro_detail');
            $table->string('pro_image');
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
        Schema::dropIfExists('new_arrivals');
    }
}
