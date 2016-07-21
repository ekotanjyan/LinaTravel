<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Didyouknow extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('Didyouknow', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description');
			$table->string('imgurl', 255);
			$table->integer('category');
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
		Schema::drop('Didyouknow');
	}

}
