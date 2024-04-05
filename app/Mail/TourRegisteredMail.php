<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TourRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;
    public $join;
    /**
     * Create a new message instance.
     */
    public function __construct($join)
    {
        {
            $this->join = $join;
        }
    }
    public function build()
        {
            return $this->view('emails.tourregistered')
                        ->with([
                            'tourName' => $this->join->name,
                            'userName' => $this->join->user->fullname,
                            
                        ]);
        }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Tour Registered Mail',
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
}
