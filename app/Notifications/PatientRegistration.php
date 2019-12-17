<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;

class PatientRegistration extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $name;
    protected $birthdate;
    protected $age;

    public function __construct($name, $birthdate, $age)
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->age = $age;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        return (new SlackMessage())
            ->success()
            ->from($this->name, ':grey_question:')
            ->content('A new patient registered!')
            ->attachment(function ($attachment) {
                $attachment->title('Patient')
                    ->fields([
                        'Name' => $this->name,
                        'Birthdate' => $this->birthdate,
                        'Age' => $this->age,
                    ]);
            });
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
            'email' => $this->email,
        ];
    }
}
