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
     * @param Car $listing
     * @param mixed $pdfContent
     * @param mixed $car_owner
     * @param mixed $mission
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
        return $this->subject('You Successfully Book a Car')->view('emails.car_driver')
            ->attachData($this->pdfContent.$this->listing, 'invoice.pdf');
    }
}
