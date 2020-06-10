<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhansuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('nhansu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('BirthDay');
            $table->string('StartDay');
            $table->string('id_LoaiNS');
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
        Schema::dropIfExists('nhansu');
    }
}

