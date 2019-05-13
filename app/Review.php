<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'blog_id', 'review', 'rate'
    ];
    public function blogs()

    {
        return $this->belongsTo(Blog::class);
    }
}
