<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
         'id',
         'cidade',
         'bairro',
         'estado',
         'num',
         'rua',
            
    
    ];
    
    protected $table = "endereco";
}