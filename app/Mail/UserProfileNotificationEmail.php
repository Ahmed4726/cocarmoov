<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserProfileNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The data to include in the notification email.
     *
     * @var array
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\User $user
     * @param array $data
     * @return void
     */
    public function __construct($user, $data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.User_profile_notification_email')
                    ->subject('Profile Submitted for approval')
                    ->with([
                        'user' => $this->user,
                        'data' => $this->data,
                    ]);
    }
}
