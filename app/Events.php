<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public function users() {
        return $this->belongsToMany('App\User' , 'user_event')->withTimestamps();
    }
}
