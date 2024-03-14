<?php

namespace App\Mail;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CarListed extends Mailable
{
    use Queueable, SerializesModels;

    public $listing;
    public $pdfContent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Car $listing, $pdfContent)
    {
        $this->listing = $listing;
        $this->pdfContent = $pdfContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your car has been listed')->view('emails.car_listed')
            ->attachData($this->pdfContent, 'invoice.pdf');
    }

}
