<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprovantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprovantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atividade');
            $table->text('descricao');
            $table->string('extensao', 5);
            $table->timestamps();

            $table->foreign('id_atividade')->references('id')->on('atividades')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprovantes');
    }
}
