<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\User;
use App\Comment;
use App\Category;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;

class LibrariesController extends Controller
{
    public function libraryindex()
    {
        //
    }
    public function create()
    {
        $categories = Category::all();

        return view('library.create', compact('categories'));
    }

    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'title'     => 'required',
            'category'  => 'required',
            'priority'  => 'required',
            'message'   => 'required'
        ]);

        $library = new Library([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'library_id' => strtoupper(str_random(10)),
            'category_id'  => $request->input('category'),
            'priority'  => $request->input('priority'),
            'message'   => $request->input('message'),
            'status'    => "Open",
        ]);

        $library->save();

        $mailer->sendLibraryInformation(Auth::user(), $library);

        return redirect()->back()->with("status", "A library order with ID: #$library->library_id has been opened.");
    }

    public function libraryusers()
    {

        $libraries = Library::where('user_id', Auth::user()->id)->paginate(10);
        $categories = Category::all();


        return view('library.libraryusers', compact('libraries', 'categories'));
    }

    public function show($library_id)
    {
        $library = Library::where('library_id', $library_id)->firstOrFail();

        $category = $library->category;

        return view('library.show', compact('library', 'category'));
    }

}
