<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
        'name',
        'description',
        'start_date',
        'end_date',
        'attachment',
        'project_id',
        'student_id'
        
        
        
        
    ];

    //Relationships

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }
}
