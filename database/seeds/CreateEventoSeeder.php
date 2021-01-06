<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CreateEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('endereco')->insert([
           "id" => 100,
           "cidade" => "São Paulo",
           "bairro" => "Bela Vista",
           "estado" => "SP",
           "num" => 2,
           "rua" => "Bom sucesso", 
       ]);
                
       DB::table('eventos')->insert([
            'id' => null,
            'titulo'  => 'Festa de Aniversario', 
            'autor' => 'Adrian',
            'descricao' => "Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.",
            'img' => 'evento_img_default.jpg',
            'inicio' => now(),
            'termino' => "2019-12-5 17:00:00",
            'id_usuario' => 1,
            'endereco' => 100,
        ]);
        
        DB::table('eventos')->insert([
            'id' => null,
            'titulo'  => 'Carriata', 
            'autor' => 'Fernando', 
            'descricao' => "Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.",
            'img' => "evento_img_default.jpg",
            'inicio' => now(),
            'termino' => "2019-12-5 17:00:00",
            'id_usuario' => 1,
             'endereco' => 100,
            
        ]);
        for($c = 0; $c < 10; $c++){
        DB::table('eventos')->insert([
            'id' => null,
            'titulo'  => Str::random(15), 
            'autor' => Str::random(7),
            'descricao' => "Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.",
            'img' => "evento_img_default.jpg",
            'inicio' => now(),
            'termino' => "2019-12-5 17:00:00",
            'id_usuario' => 1,
             'endereco' => 100,
            
        ]);
        }
        
        
    }
}