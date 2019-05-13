<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Library;

class Library extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'library_id', 'title', 'priority', 'message', 'status'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
