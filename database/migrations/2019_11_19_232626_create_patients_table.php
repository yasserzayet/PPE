<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('NumPat')->unique();
          $table->string('NomPat');
          $table->string('PrenomPat');
          $table->date('DateNaissPat');
          $table->string('SexePat');
          $table->string('AddressPat');
          $table->integer('TelephPat');
          $table->string('EmailPat');
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
        Schema::dropIfExists('patients');
    }
}
