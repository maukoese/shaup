<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\Messages\SmsMessage;
use App\Channels\SmsChannel;
use App\Document;

class DocumentsSent extends Notification
{
    use Queueable;

    public $document;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \App\Channels\Messages\SmsMessage
     */
    public function toSms($notifiable)
    {
        return (new SmsMessage)
                    ->content('Your document has been sent!');
    }

}
