<?php

namespace App\Mail;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CarDriver extends Mailable
{
    use Queueable, SerializesModels;

    public $listing;
    public $pdfContent;
    public $car_owner;
    public $mission;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Car $listing, $pdfContent, $car_owner, $mission)
    {
        $this->listing = $listing;
        $this->pdfContent = $pdfContent;
        $this->mission = $mission;
        $this->car_owner = $car_owner;
        // dd($this->car_owner);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Successfully Book a car')->view('emails.car_driver')
            ->attachData($this->pdfContent, 'invoice.pdf');
    }

}
