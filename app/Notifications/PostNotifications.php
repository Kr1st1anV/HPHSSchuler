<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\VonageMessage;

class PostNotifications extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
 * Get the Vonage / SMS representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\VonageMessage
 */
    public function via($notifiable)
    {
        return ['vonage'];
    }

    public function toVonage($notifiable): VonageMessage
    {
        return (new VonageMessage())
                    ->content("New post has been made. Check it out in the Schuler App!");
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
