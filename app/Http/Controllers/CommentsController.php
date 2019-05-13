<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Library;
use App\Auth;
use App\Mailers\AppMailer;

class CommentsController extends Controller
{
    public function postComment(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'comment'   => 'required'
        ]);

        $comment = Comment::create([
            'library_id' => $request->input('library_id'),
            'user_id'    => \Auth::user()->id,
            'comment'    => $request->input('comment'),
        ]);
        if ($comment->library->user->id !== \Auth::user()->id) {
            $mailer->sendLibraryComments($comment->library->user, \Auth::user(), $comment->library, $comment);
        }

        return redirect()->back()->with("status", "Your comment has be submitted.");
    }

}
