<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'age',
        'date_of_birth',
        'phone_number',
        'email',
        'guardian',
        'address'
    ];
}