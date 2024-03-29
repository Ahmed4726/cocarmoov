<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RideCancellationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $driverName;
    public $carMakeAndModel;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($driverName, $carMakeAndModel)
    {
        $this->driverName = $driverName;
        $this->carMakeAndModel = $carMakeAndModel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Cancellation Notification')
                    ->view('emails.ride_cancellation_notification');
    }
}
