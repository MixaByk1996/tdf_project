<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendQuestion extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $description;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $description)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('send-question')->with([
            'name' => $this->name,
            'phone' => $this->phone,
            'description' => $this->description
        ]);
    }
}
