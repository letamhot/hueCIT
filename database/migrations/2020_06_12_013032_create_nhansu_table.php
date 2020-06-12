<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhansuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhansu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('Name', 65535);
			$table->date('BirthDay');
			$table->date('StartDay');
			$table->integer('id_LoaiNS')->index('foreignkey')->nullable();
			$table->integer('id_csyt')->index('id_csyt');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nhansu');
	}

}
