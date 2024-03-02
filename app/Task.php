<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
class Task extends Model
{
    //
    protected $fillable=[
        'name',
        'start_date',
        'end_date',
        
        
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
