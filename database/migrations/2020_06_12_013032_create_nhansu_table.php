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
			$table->text('name', 65535);
			$table->date('birthDay');
			$table->date('startDay');
			$table->integer('id_LoaiNS')->index('foreignkey')->nullable();
			$table->integer('id_csyt')->index('id_csyt')->nullable();
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
		Schema::drop('nhansu');
	}

}
