<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Task;

class Project extends Model
{
    //
    protected $fillable=[
        'name',
        'description',
        'start_date',
        'end_date',
        
        
        
    ];

    //Relationships
   
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function tasks(){
        return $this->hasMany('App\Task');
    }

}
