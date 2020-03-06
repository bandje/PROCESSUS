<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->bigIncrements('id_payement');
            $table->unsignedBigInteger('id_caisse');
            $table->foreign('id_caisse')->references('id_caisse')->on('caisses');
            $table->unsignedBigInteger('id_demande');
            $table->foreign('id_demande')->references('id_demande')->on('demandes');
            $table->datetime("date_payement")->nullable();
            $table->float('montant_payer')->nullable();
            $table->text('mot_caissier')->nullable();
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
        Schema::dropIfExists('payements');
    }
}
