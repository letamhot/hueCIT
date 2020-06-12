<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCosoyteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cosoyte', function(Blueprint $table)
		{
			$table->integer('id_csyt', true);
			$table->text('name', 65535);
			$table->text('diachi', 65535);
			$table->string('sdt');
			$table->text('loaiCS', 65535);
			$table->date('NgayTL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cosoyte');
	}

}