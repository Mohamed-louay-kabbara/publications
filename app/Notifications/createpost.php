<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class createpost extends Notification
{
    use Queueable;
    private $post_id;
    private $user_name;
    private $title;
    public function __construct($post_id,$user_name,$title)
    {
        $this->post_id=$post_id;
        $this->user_name=$user_name;
        $this->title=$title;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

            return[
                'post_id'=> $this->post_id,
                'user_name'=> $this->user_name,
                'title'=> $this->title,
            ];
    }
}
