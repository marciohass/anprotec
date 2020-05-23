<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    protected $table = 'inscritos';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'rg',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf'
      ];
}
