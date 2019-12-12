<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DeclinedUserRegistration extends Notification implements ShouldQueue
{
    use Queueable;

    public $reason;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($reason)
    {
        $this->reason = $reason;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('DigiBP Rhône - Declined registration')
                    ->greeting('Dear Patient')
                    ->line('Based on our initial assessment, your profile does not meet the strict requirements of clinical trial studies in Diabetes.  If you would like to understand our decision better, please do not hesitate to contact us.')
                    ->line('If you are worried about your diabetes care, we recommend that you contact your health care provider as soon as possible.')
                    ->salutation('Best regards');

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
            //
        ];
    }
}
