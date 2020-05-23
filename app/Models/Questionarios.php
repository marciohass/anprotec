<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionarios extends Model
{
    protected $table = 'questionarios';
    protected $fillable = [
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'Q5',
        'Q6',
        'Q6_desc',
        'Q7',
        'Q8',
        'Q9_desc01',
        'Q9_desc02',
        'Q9_desc03',
        'Q10',
        'Q11',
        'Q12',
        'Q13',
        'Q14',
        'Q15',
        'Q16',
        'Q17',
        'Q18',
        'Q19',
        'Q20',
        'Q21',
        'Q22',
        'Q23',
        'Q24',
        'Q25',
        'Q26',
        'Q27',
        'inscrito_id'
      ];
}
