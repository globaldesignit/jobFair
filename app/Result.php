<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'id',
        'localTest',
        'name',
        'mail',            
        'total',
        'result',
        'phone',
        'status'
];
    protected $table = 'results';
}
