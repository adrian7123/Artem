<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsuariosTable.
 */
class CreateUsuariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 80);
            $table->string('estado', 2);
            $table->string('email', 150)->unique();
            $table->string('senha', 200);
            $table->text('descricao')->nullable();
            $table->string('imgPerfil', 180)->nullable();
           
           
            $table->rememberToken();  
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
		Schema::drop('usuarios');
	}
}