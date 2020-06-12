<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNhansuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nhansu', function(Blueprint $table)
		{
			$table->foreign('id_csyt', 'nhansu_ibfk_1')->references('id_csyt')->on('cosoyte')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_LoaiNS', 'nhansu_ibfk_2')->references('id')->on('loainhansu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nhansu', function(Blueprint $table)
		{
			$table->dropForeign('nhansu_ibfk_1');
			$table->dropForeign('nhansu_ibfk_2');
		});
	}

}
