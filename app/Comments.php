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
        return $this->belongsTo('App\User');
    }

    // public function scopeLatest(Builder $query) {
    //     return $query->orderBy(static::CREATED_AT , 'desc');
    // }

    // public function scopeMostCommented(Builder $query) {
    //     return $query->withCount('comments')->orderBy('comments_count' , 'desc');
    // }

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function (Comments $comment) {
    //         Cache::tags(['blog-post'])->forget("news-{$comment->news_id}");
            
    //     });

    //     // static::addGlobalScope(new LatestScope);
    // }
}
