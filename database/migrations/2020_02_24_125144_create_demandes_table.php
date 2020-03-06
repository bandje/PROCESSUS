<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id_demande');
            $table->unsignedBigInteger('type_demande_id');
            $table->foreign('type_demande_id')->references('id')->on('type_demandes');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->string("nom_demande");
            $table->string("motif_demande")->nullable();
            $table->string("nom_beneficiaire");
            $table->integer("montant");
            $table->string("autre")->nullable();
            $table->string("document_founir")->nullable();
            $table->integer("code_service_users")->nullable();
            $table->string("statut");
            $table->integer("code")->nullable();
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
        Schema::dropIfExists('demandes');
    }
}
