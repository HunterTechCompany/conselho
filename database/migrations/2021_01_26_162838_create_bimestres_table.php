<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimestres', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('bimestre');
            $table->integer('media_bimestre');
            $table->integer('media_total');
            $table->unsignedBigInteger('id_turma');
            $table->timestamps();

            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimestres');
    }
}
