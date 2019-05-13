<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function postreview(Request $request)
    {
        $this->validate($request, [
            'review'   => 'required'

        ]);

        $review = Review::create([
            'blog_id' => $request->input('blog_id'),
            'review'    => $request->input('review'),
            'rate' => $request->input('rate'),
        ]);

        return redirect()->back()->with("status", "Your Review has been submitted.");
    }
    public function create()
    {
        $categories = Review::all();

        return view('review.create');
    }

    public function reviewstore(Request $request)
    {
        $this->validate($request, [
//            'blog_id'  => 'required',
            'review'  => 'required',
            'rate'   => 'required'
        ]);

        $review = new Review([
            'user_id'   => Auth::user()->id,
            'blog_id'  => $request->input('blog'),
            'review'  => $request->input('review'),
            'rate'   => $request->input('rate'),

        ]);

        $review->save();

        return redirect()->back()->with("status", "A review with ID: #$review->review_id has been opened.");
    }
    public function show($review_id)
    {

        $review = Review::where('review_id', $review_id)->firstOrFail();
        $reviews = $review->review;

//        $category = $review->blog;
        return view('reviews.show', compact('review', 'rate'));
    }
    public function blogReviews($blog_id)
    {
        //       $reviews = Review::where('blog_id' )->paginate(10);
        $reviews = Review::where ('blog_id');
//        $categories = Category::all();
        echo 'ok.......ok ';
//        return view('blogReviews', compact('reviews', 'categories'));

    }
    public function thankyou($name ,Request $request)
    {
        return view ('thankyou')->with(compact('name'));
    }


}
