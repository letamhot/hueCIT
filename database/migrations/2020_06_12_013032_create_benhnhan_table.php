<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBenhnhanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('benhnhan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('hoten', 65535);
			$table->text('diachi', 65535);
			$table->text('SDT', 65535);
			$table->date('BirthDay');
			$table->date('StartDay');
			$table->text('tenbenh', 65535);
			$table->integer('id_giuong')->index('id_giuong');
			$table->integer('id_csyt')->index('par_ind');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('benhnhan');
	}

}
