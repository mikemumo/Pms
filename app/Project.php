<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=[
        'name',
        'description',
        'start_date',
        'end_date',
        'attachment'
        
        
    ];

    //Relationships
   
    public function user(){
        return $this->belongsTo('App\User');
    }

}
