<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'gender',
        'homeroom',
        'position',
        'subject',
        'photo'
    ];
}
