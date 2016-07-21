<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MostPopularTours extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MostPopularTours', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('price', 15);
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
		Schema::drop('MostPopularTours');
	}

}
