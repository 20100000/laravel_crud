<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('ra', 20);
            $table->bigInteger('professor_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('alunos', function (Blueprint $table){
            $table->foreign('professor_id')
                ->nullable()
                ->references('id')
                ->on('professores');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
