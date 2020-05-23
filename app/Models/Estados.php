<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';
    protected $fillable = [
        'sigla',
        'nome'
      ];
}
