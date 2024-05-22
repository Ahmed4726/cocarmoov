<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverDeliveryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $pick_up_car;

    public function __construct($pick_up_car)
    {
        $this->pick_up_car = $pick_up_car;
    }

    public function build()
    {
        return $this->view('emails.driver_delivery')
                    ->with(['pick_up_car' => $this->pick_up_car]);
    }
}

