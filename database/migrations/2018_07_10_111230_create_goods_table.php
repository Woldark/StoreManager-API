<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
			$table->integer('type_id')->unsigned()->index()->nullable();
			$table->integer('room_id')->unsigned()->index()->nullable();

			$table->string('name');
			$table->string('property_number')->unique();
			$table->string('kind');
			$table->string('old_property_number')->unique();
			$table->string('old_kind');
			$table->text('description')->nullable();
			$table->string('model');
			$table->string('serial');
			$table->string('barcode');
			$table->enum('status', ['healthy', 'broken']);
			$table->string('picture')->nullable();
			$table->string('unit');

			$table->timestamps();

			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
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
