<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
        'id',
        'nome',
        'nacionalidade',
        'email',
        'senha',
        'descricao',
        'imgPerfil',
        'remember_token'
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([   
            'id' => null,
            'nome'  => "Adrian", 
            'email' => "adrian@gmail.com", 
            'senha' => bcrypt('adrian'), 
            'estado' => "SP",
            "descricao" => null,
            "imgPerfil" => null,
            'remember_token' => null,
            
        ]);
    }
}