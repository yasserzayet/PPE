<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('consultations', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('NumCons')->unique()	;
      $table->date('DateCons');
      $table->integer('NumPat');

      $table->foreign('NumPat')->references('NumPat')->on('patients');

      ;
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
    Schema::dropIfExists('consultations');
  }
}
