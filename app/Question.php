<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id',
        'question',
        'ans1',
        'ans2',            
        'ans3',
        'ans4',
        'correctAns',
        'level',
        'typeQues'
];
    protected $table = 'questions';
}
