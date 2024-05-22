<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverPickupNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $pick_up;
    public $car;

    public function __construct($pick_up, $car)
    {
        $this->pick_up = $pick_up;
        $this->car = $car;
    }

    public function build()
    {
        return $this->view('emails.driver_pickup')
                    ->with([
                        'pick_up' => $this->pick_up,
                        'car' => $this->car,
                    ]);
    }
}

