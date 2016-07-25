<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cruises extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cruises', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->unsignedInteger('price');
			$table->date('start_date');
			$table->unsignedInteger('days');
			$table->text('description');
			$table->string('imgurl', 255);
			$table->unsignedInteger('category');
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
		Schema::drop('Cruises');
	}

}
