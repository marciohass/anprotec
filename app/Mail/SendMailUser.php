<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    private $codigo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $codigo)
    {
        $this->data = $data;
        $this->codigo = $codigo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Pedido realizado com sucesso!');
        $this->to($this->data['senderEmail'], $this->data['senderName']);


        return $this->markdown('emails.welcome', [
            'data' => $this->data,
            'codigo' => $this->codigo
        ]);
    }
}
