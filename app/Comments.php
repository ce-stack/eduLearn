<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Filesystem\Cache;

class Comments extends Model
{

    protected $guarded = [];
    // public function courses () {
    //     return $this->belongsTo('App\Courses');
    // }

   

    public function news () {
        return $this->belongsTo('App\User');
    }

    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Courses' , 'id');
    }

}
