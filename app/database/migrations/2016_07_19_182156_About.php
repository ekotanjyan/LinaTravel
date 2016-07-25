<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class About extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('About', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description');
			$table->string('imgurl', 255);
			$table->integer('category');
			$table->string('facebook', 255);
			$table->string('twitter', 255);
			$table->string('linkedin', 255);
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
		Schema::drop('About');
	}

}
