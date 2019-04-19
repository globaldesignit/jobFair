<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeQues extends Model
{
    protected $fillable = [
        'id',
        'type',
        'level',
        'limit'
];
    protected $table = 'type_ques';
}
