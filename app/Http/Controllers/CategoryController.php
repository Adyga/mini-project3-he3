<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    protected $fillable = ['name'];

    public function create()
    {
        $category = new Category;
        $edit = FALSE;
        return view('/library.addcategory', ['category' => $category,'edit' => $edit  ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required'
        ]);

        $review = new Category([
            'name'  => $request->input('name'),

        ]);

        $review->save();

        return redirect()->route('home')->with('success','Category Record Created');
    }


    public function libraries()
    {
        return $this->hasMany(Library::class);
    }

}
