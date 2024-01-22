<?php

namespace App\Mail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $name,$email,$phone ,$subject ,$message ;
    /**
     * Create a new message instance.
     */
/**
     * Create a new message instance.
     */

     public function __construct($name, $email, $phone, $subject, $message)
     {
         $this->name = $name;
         $this->email = $email;
         $this->phone = $phone;
         $this->subject = $subject;
         $this->message = $message;
     }

       public function build()
    {
        return $this->markdown('emails.sample')->
       subject(config('app.name').'','contact us')
            ->view('emails.sample');
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {  return new Envelope(
        from:new Address('hello@example.com','abeir')
       
          
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown:'emails.sample',
            with:[
                'name'=>$this->name,
                'name'=>$this->email,
                'name'=>$this->subject,
                'name'=>$this->message,

            ]
            
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
