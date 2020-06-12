<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBenhnhanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('benhnhan', function(Blueprint $table)
		{
			$table->foreign('id_giuong', 'benhnhan_ibfk_1')->references('id')->on('giuongbenh')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_csyt', 'benhnhan_ibfk_2')->references('id_csyt')->on('cosoyte')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('benhnhan', function(Blueprint $table)
		{
			$table->dropForeign('benhnhan_ibfk_1');
			$table->dropForeign('benhnhan_ibfk_2');
		});
	}

}
