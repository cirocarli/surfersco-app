<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// use App\Http\Controllers\MailController;
class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     */
    public $name, $email, $birthPlace, $birthday, $phone, $company, $mailMessage;
    public function __construct($name, $email, $birthPlace, $birthday, $phone, $company, $subject,$mailMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->birthPlace = $birthPlace;
        $this->birthday = $birthday;
        $this->phone = $phone;
        $this->company = $company;
        $this->mailMessage = $mailMessage;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: 'Sandroft Website Mail',
            subject: $this->subject,
        );
    }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'sand',
            markdown: 'email_to_admin',
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
