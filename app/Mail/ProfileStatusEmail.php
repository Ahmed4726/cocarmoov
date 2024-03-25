<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfileStatusEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $profile;
    public $note;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $profile, $note)
    {
        $this->profile = $profile;
        $this->note = $note;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Profile Status Update')
                    ->view('emails.profileStatusEmail');
    }
}
