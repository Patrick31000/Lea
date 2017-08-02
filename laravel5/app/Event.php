<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events'; // you may change this to your name table
    public $timestamps = true; // set true if you are using created_at and updated_at
    protected $primaryKey = 'id'; // the default is id
<<<<<<< HEAD
    
=======

    public function users(){
        return $this->belongsToMany('App\User');
    }
 
>>>>>>> 500f9e858a4f3460459bc6900dd4ba21e48018e1
}
