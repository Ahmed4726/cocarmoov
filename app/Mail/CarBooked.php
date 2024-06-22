<?php

namespace App\Mail;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CarBooked extends Mailable
{
    use Queueable, SerializesModels;

    public $listing;
    public $pdfContent;
    public $driver;
    public $mission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Car $listing, $pdfContent, $driver, $mission)
    {
        $this->listing = $listing;
        $this->pdfContent = $pdfContent;
        $this->driver = $driver;
        $this->mission = $mission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your car has been successfully booked for move')->view('emails.car_booked')
            ->attachData($this->pdfContent.$this->listing , 'invoice.pdf');
    }

}
