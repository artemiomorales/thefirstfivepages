<?php

use Illuminate\Database\Migrations\Migration;

class CreateEmailList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
    	{
			$table->increments('id');
	        $table->string('email', 320);
	        $table->string('_token');
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
		Schema::drop('users');
    	
	}

}