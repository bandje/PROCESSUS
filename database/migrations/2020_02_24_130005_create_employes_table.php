<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id_employes');
            $table->unsignedBigInteger('id_service');
            $table->string('nom');
            $table->string('slug');
            $table->text('matricule');
            $table->text('password');
            $table->string('email')->unique();
            $table->foreign('id_service')->references('id_service')->on('services');
            $table->string("role");
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
        Schema::dropIfExists('employes');
        
    }
}
