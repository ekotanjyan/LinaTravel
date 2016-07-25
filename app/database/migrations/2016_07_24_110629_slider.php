<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slider extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Slider', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('text1', 255);
			$table->string('text2', 255);
			$table->string('text3', 255);
			$table->string('text4', 255);
			$table->timestamps();
		});
		DB::table('Slider')->insert(['name' => 'Name1','text1' => 'Text1','text2' => 'Text2','text3' => 'Text3','text4' => 'Text4',]);
		DB::table('Slider')->insert(['name' => 'Name2','text1' => 'Text1','text2' => 'Text2','text3' => 'Text3','text4' => 'Text4',]);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Slider');

	}

}
