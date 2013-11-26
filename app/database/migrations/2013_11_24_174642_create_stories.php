<?php

use Illuminate\Database\Migrations\Migration;

class CreateStories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stories', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->string('slug')->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stories');
	}

}