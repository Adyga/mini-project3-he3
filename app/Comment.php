<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'ticket_id', 'user_id', 'comment'
    ];
    public function library()
    {
        return $this->belongsTo('App\Library');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
