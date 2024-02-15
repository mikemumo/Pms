<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
        'name',
        'start_date',
        'end_date',
        'project_id',
        'user_id'
        
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
}
