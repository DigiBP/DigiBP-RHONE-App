<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApprovedUserRegistration extends Notification
{
    use Queueable;

    protected $email;
    protected $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
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
                    ->subject('DigiBP Rhône - Patient registration')
                    ->greeting('Dear Patient')
                    ->line('You\'ve successfully registered for The Clinical Trial. Find your credentials attached:')
                    ->line('Username: ' . $this->email)
                    ->line('Password: ' . $this->password)
                    ->action('Authorize', route('dashboard.index'))
                    ->line('Thank you for using our application!');
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
