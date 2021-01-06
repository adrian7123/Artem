<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuarios extends Authenticatable
{
    
    public function getAuthPassword(){
        return $this->senha;
    }
    
    
    protected $fillable = [
        'id',
        'nome',
        'estado',
        'email',
        'senha',
        'descricao',
        'imgPerfil',
    ];
    
    protected $table = 'usuarios';
    
    
}