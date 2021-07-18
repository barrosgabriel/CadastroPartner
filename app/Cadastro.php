<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'dataNascimento', 'cep', 'estado', 'cidade', 'bairro', 'rua', 'numero'
    ];
}
