<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMailableServer extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->data = $request->all();
        if($this->data['i'] == "2"){
            $this->data['message'] = str_replace("\r","\n",$this->data['message']);
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       if($this->data['i'] == "2"){
         return $this->markdown('mail.contactformemailtoagent')
         ->from($this->data['email'])
         ->to(config('mail.from.address'), config('mail.from.name'))
         ->with('data', $this->data)
         ->subject("Query Confirmation - ".config('data.meta.sitename'));
     }
     else{
        return $this->markdown('mail.quoteformemailtoagent')
        ->from($this->data['email'])
        ->to(config('mail.from.address'), config('mail.from.name'))
        ->with('data', $this->data)
        ->subject("Query Confirmation - ".config('data.meta.sitename'));
    }
}
}
