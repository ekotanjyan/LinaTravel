<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopularDestinations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('PopularDestinations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('place', 255);
            $table->unsignedInteger('price');
            $table->string('imgurl', 255);
			$table->text('description');
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
		Schema::drop('PopularDestinations');
	}

}
