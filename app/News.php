<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\DeletedAdminScope;
use Illuminate\Support\Facades\Cache;

class News extends Model
{
    public function comments() {
        return $this->hasMany('App\Comments');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
