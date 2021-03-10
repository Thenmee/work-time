<?php

namespace App\Mail\Notifies;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyEmailAcceptTender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $timeout = 7200;
    //public $type;
    public function __construct($data)
    {
        $this->data = $data;
        //$this->type=$data->type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // if($type=='tender')
        // {
            return $this->subject(' Notification Of Accept Tender ')->view('email.MailNotifyAcceptTender');
        /* }
        elseif($type=='job')
        {return $this->subject(' Notifation Of Job ')->view('email.MailNotifyJob');}*/
    } 
}
