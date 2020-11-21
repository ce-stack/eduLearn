<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravelista\Comments\Commenter;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function courses () {
    //     return $this->hasMany('App\Courses');
    // }

    public function events () {
        return $this->belongsToMany('App\Events', 'user_event')->withTimestamps();
    }




    public function courses () {
        return $this->belongsToMany('App\Courses' , 'user_course')->withTimestamps();
    }

    public function comments()
      {
        return $this->hasMany('App\Comments' , 'user_id');
      }


}
