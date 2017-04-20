<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = array('nome_produto', 'preco_produto', 'imagem_produto', 'descricao_produto');

    protected $table = 'produtosgv';

    public $timestamps = false;

}
