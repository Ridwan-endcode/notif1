<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Post;


class AddPost extends Notification
{
    use Queueable;
    protected $post;
  
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

  
    public function toArray($notifiable)
    {
        return [
            'data' => 'We Have New Post ' .$this->post->title ." <br> Added By " . auth()->user()->name
        ];
    }
}
