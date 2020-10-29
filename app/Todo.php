<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $fillable = [
        'naslov',
        'autor',
        'zanr',
        'isbn',
        'dostupno'
               
    ];
}
