<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\khachhang;

class changepassMail extends Mailable
{
    use Queueable, SerializesModels;

    private khachhang $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->khachhang=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Quên tài khoản!")
        ->view('backend.mail')
        ->with([
             'user'=> $this->khachhang
        ]);
    }
}
