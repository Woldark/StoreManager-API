<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('type_id')->unsigned()->index()->nullable();
            $table->integer('room_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('property_number')->unique();
            $table->string('kind');
            $table->string('old_property_number')->unique();
            $table->string('old_kind');
            $table->text('description');
            $table->string('model');
            $table->string('serial');
            $table->string('barcode');
            $table->string('status');
            $table->string('picture');
            $table->string('unit');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
