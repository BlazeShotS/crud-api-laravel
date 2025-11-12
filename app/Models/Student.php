<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    /*Este seria como mi modelo , que debe coincidir con los datos de la tabla*/
    protected $fillable = [
        'name',
        'email',
        'phone',
        'language'
    ];
}
