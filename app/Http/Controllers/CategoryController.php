<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $fillable = ['name'];


    public function libraries()
    {
        return $this->hasMany(Library::class);
    }
}
