<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvoyeNotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envoye__notifs', function (Blueprint $table) {
            $table->bigIncrements('id_envoye_notification');
            $table->unsignedBigInteger('id_notification');
            $table->foreign('id_notification')->references('id')->on('notifications');
            $table->integer('id_users');
            
            $table->dateTime('date_time');
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
        Schema::dropIfExists('envoye__notifs');
    }
}
