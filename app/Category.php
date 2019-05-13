<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Library;
use App\Category;

class Category extends Model
{
    protected $fillable = ['name'];

    public function libraries()
    {
        return $this->hasMany('App\Library');
    }

}
