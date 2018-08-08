<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailTest extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name = 'test', $text = 'testtest')
    {
        $this->title = sprintf('%sさんがコメントしました。', $name);
        $this->text = $text;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.sample')
            ->text('mails.sample')
            ->subject('$this->title')
            ->with([
                'text'=>$this->text,
            ]);
    }
}
