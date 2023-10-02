<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiOrderMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $carts;
    public $code_order;
    public $email;
    /**
     * Create a new message instance.
     */
    public function __construct($code_order, $order, $carts, $email)
    {
        $this->order = $order;
        $this->carts = $carts;
        $this->code_order = $code_order;
        $this->email = $email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Hóa đơn ',
        );
    }

    /**
     * Get the message content definition.
     */

    public function build()
    {
        return $this->view('client.view')
            ->with('order', $this->order)
            ->with('carts', $this->carts)
            ->with('email', $this->email)
            ->with('code_order', $this->code_order);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
