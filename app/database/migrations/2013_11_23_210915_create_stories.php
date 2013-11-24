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
			$table->string('title');
			$table->string('author');
			$table->string('id')->unique();
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