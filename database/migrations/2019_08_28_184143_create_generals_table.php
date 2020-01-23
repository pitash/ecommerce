<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('com_name');
            $table->string('header_title');
            $table->string('com_addres');
            $table->string('com_phone');
            $table->string('copyright');
            $table->string('com_logo');
            $table->string('com_details');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instragram');
            $table->string('youtube');
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
        Schema::dropIfExists('generals');
    }
}
