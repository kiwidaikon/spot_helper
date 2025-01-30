<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $form_data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $from    = new Address($this->form_data['email'], $this->form_data['name']);
        $subject = '【' . env('APP_NAME') . '】お問い合せがありました';

        return new Envelope(
            from: $from,
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            text: 'emails.contact.admin', // プレーンテキストで送信
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \\Illuminate\\Mail\\Mailables\\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
