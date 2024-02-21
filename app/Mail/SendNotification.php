<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $email;
    public $inn;
    public $description;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone,  $description,$email, $inn)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->description = $description;
        $this->email = $email;
        $this->inn = $inn;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): SendNotification
    {
        return $this->view('send-notification')->with([
            'name' => $this->name,
            'phone' => $this->phone,
            'description' => $this->description,
            'inn' => $this->inn,
            'email' => $this->email,
        ]);
    }
}
