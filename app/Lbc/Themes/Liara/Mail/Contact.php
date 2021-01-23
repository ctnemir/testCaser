<?php
namespace App\Lbc\Themes\Liara\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    protected $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;
        return $this->from(['address' => $data['email'], 'name' => $data['name']])
            ->subject('Contactform ' . $data['subject'] ?? '')
            ->view('lbc.themes.liara.mail.contact', compact('data'));
    }
}
