<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverDeliveryApprovedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $mission;
    public $driver;

    public function __construct($mission, $driver)
    {
        $this->mission = $mission;
        $this->driver = $driver;
    }

    public function build()
    {
        return $this->view('emails.driver_delivery_approved')
                    ->with([
                        'mission' => $this->mission,
                        'driver' => $this->driver,
                    ]);
    }
}

