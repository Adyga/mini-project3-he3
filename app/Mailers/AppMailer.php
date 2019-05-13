<?php
namespace App\Mailers;

use App\Library;
use App\User;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Auth;

class AppMailer
{
    protected $mailer;
    protected $fromAddress = 'support@supportlibrary.dev';
    protected $fromName = 'Support Library';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendLibraryInformation($user, Library $library)
    {
        $this->to = $user->email;
        $this->subject = "[Library ID: $library->library_id] $library->title";
        $this->view = 'emails.library_info';
        $this->data = compact('user', 'library');

        return $this->deliver();
    }
    public function sendLibraryStatusNotification($libraryOwner, Library $library)
    {
        $this->to = $libraryOwner->email;
        $this->subject = "RE: $library->title (Library ID: $library->library_id)";
        $this->view = 'emails.library_status';
        $this->data = compact('libraryOwner', 'library');

        return $this->deliver();
    }
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->fromAddress, $this->fromName)
                ->to($this->to)->subject($this->subject);
        });
    }
    public function sendLibraryComments($libraryOwner, $user, Library $library, $comment)
    {
        $this->to = $libraryOwner->email;
        $this->subject = "RE: $library->title (Library ID: $library->library_id)";
        $this->view = 'emails.library_comments';
        $this->data = compact('libraryOwner', 'user', 'library', 'comment');

        return $this->deliver();
    }
    public function handle($request, Closure $next)
    {
        if (Auth::user()->is_admin !== 1) {
            return redirect('home');
        }

        return $next($request);
    }



}