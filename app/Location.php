<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'level',
        'shortName',
        'status',
        'percentPass'
];
    protected $table = 'locations';
}
