<?php

use Illuminate\Database\Migrations\Migration;

class RemoveStoryTimestamps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stories', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stories', function($table)
        {
            $table->timestamps();
        });
	}

}