<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Proposal;
use App\Models\Car;

class OfferAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $proposal;
    public $car;
    public $driver;

    public function __construct(Proposal $proposal, Car $car, $driver)
    {
        $this->proposal = $proposal;
        $this->car = $car;
        $this->driver = $driver;
    }

    public function build()
    {
        return $this->view('emails.offerAccepted')
                    ->with([
                        'proposal' => $this->proposal,
                        'car' => $this->car,
                        'driver' => $this->driver,
                    ]);
    }
}
