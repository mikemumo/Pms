<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable =[
        'name',
        'course',
        'phone',
        'email'
    ];
    
    //Relationships

    
}
