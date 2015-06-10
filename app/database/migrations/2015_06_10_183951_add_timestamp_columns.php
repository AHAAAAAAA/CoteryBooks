<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampColumns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function($table){
			$table->timestamps();
		}
);
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books', function($table){
			$table->dropColumn(array('updated_at', 'created_at'));
		}
	);

}
}
