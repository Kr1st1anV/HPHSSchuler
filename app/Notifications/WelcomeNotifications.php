<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\VonageMessage;

class WelcomeNotifications extends Notification
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
                    ->content('Thank you for registering for the Schuler Application. Here you will recive the latest news and updates on HPHS Schuler!');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
