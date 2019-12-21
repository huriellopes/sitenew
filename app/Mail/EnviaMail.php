<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviaMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('enviarContact')->with(['campo' => $this->inputs]);
    }
}
