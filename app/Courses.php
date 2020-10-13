<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function comments () {
        return $this->hasMany('App\Comments');
    }

    public function users () {
        return $this->belongsToMany('App\User' , 'user_course')->withTimestamps();
    }
    
    public function lessons () {
        return $this->hasMany('App\Lesson');
    }
}
