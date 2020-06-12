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
			$table->text('name');
			$table->text('diachi');
			$table->string('sdt');
			$table->text('loaiCS');
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
