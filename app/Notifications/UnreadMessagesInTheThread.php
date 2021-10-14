<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UnreadMessagesInTheThread extends Notification
{
    use Queueable;

    protected $messages;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($messages, $user)
    {
        $this->messages = $messages;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // if ($this->messages->count() > 0) {
        return ['database'];
        // }
        return [];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->markdown('mails.unread-messages', [
            'messages' => $this->messages,
            'user' => $this->user
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'name' => $this->user->nom,
            'email' => $this->user->email,
            'messages' => $this->messages,
        ];
    }
}
