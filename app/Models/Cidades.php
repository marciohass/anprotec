<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $table = 'cidades';
    protected $fillable = [
        'nome',
        'estado_id'
      ];
}
