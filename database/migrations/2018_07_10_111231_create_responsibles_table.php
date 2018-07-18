<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsiblesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responsibles', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('room_id')->unsigned()->index()->nullable();

			$table->string('name');
			$table->string('code_meli')->unique();
			$table->string('post');
			$table->string('shenasnameh')->unique();
			$table->string('personeli')->unique();
			$table->string('picture')->nullable();

			$table->timestamps();

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
		Schema::dropIfExists('responsibles');
	}
}
