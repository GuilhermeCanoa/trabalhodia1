<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = array('nome_usuario', 'email_usuario', 'senha_usuario');

    protected $table = 'usuariosgv';

    public $timestamps = false;
}
