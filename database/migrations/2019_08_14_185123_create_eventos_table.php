<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 255);
            $table->string('autor', 255);
            $table->longText('descricao')->nullable();
            $table->string('img')->nullable()->default('evento_img_default.jpg');
            $table->integer('numParticipantes')->default(0);
            $table->dateTime('inicio');
            $table->dateTime('termino');
                   
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
        Schema::dropIfExists('eventos');
    }
}