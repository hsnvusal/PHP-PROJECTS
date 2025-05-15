<?php

namespace App\Mail;

use App\Models\Kullanici;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KullaniciKayit extends Mailable
{
    use Queueable, SerializesModels;
    public  $kullanici;

    /**
     * Create a new message instance.
     */
    public function __construct(Kullanici $kullanici)
    {
        $this->kullanici = $kullanici;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: config('app.name') . ' - Kullanici Kaydi',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.kullanici_kayit',
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
