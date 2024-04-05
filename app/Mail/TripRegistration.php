<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TripRegistration extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $join;
    /**
     * Create a new message instance.
     */
    public function __construct($user, $join)
    {
        $this->user = $user;
        $this->join = $join;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Trip Registration',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
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
    public function build()
    {
        return $this->from('your-email@example.com')
                    ->subject('Trip Registration Confirmation')
                    ->view('emails.trip_registration')
                    ->with([
                        'user' => $this->user,
                        'join' => $this->join,
                    ]);
    }
}
