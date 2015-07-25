<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('description');
            $table->tinyInteger('project');
            $table->text('type');
            $table->boolean('studio');
            $table->integer('bedrooms');
            $table->integer('bathroom');
            $table->float('price');
            $table->float('area');
            $table->json('images');
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
		Schema::drop('units');
	}

}
