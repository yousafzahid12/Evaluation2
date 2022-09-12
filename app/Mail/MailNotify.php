<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $users=$users=User::where('email','=',$request->email)->first();
        return $this->from('books.softwares@gmail.com','Yousaf Zahid')
        ->subject($this->data['subject'])->view('pages.front_end.registration.email',['users'=>$users])->with('data',$this->data);
    }
}
