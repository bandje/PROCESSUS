<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPprovissionementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_pprovissionements', function (Blueprint $table) {
            $table->bigIncrements('id_approvissionement');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->unsignedBigInteger('id_caisse');
            $table->foreign('id_caisse')->references('id_caisse')->on('caisses');
            $table->dateTime('date_approvisionement');
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
        Schema::dropIfExists('a_pprovissionements');
    }
}
