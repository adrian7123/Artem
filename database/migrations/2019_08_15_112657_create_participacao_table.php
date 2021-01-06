<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('criador');


            
            $table->timestamps();
        });
        
        Schema::table('participacao', function (Blueprint $table) {
        	$table->unsignedBigInteger('evento');
                  
            $table->foreign('evento')
                  ->references('id')->on('eventos')
                  ->onDelete('cascade');          
            
            
            $table->unsignedBigInteger('participante');       
            
            $table->foreign('participante')
                  ->references('id')->on('usuarios')
                  ->onDelete('cascade');
        	
        	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participacao');
    }
}