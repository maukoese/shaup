<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;
use AfricasTalking\SDK\AfricasTalking;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);


        $to = $notifiable->routeNotificationFor('Sms');

        // Set your app credentials
        $username   = "MyAppsUsername";
        $apiKey     = "MyAppAPIKey";

        // Initialize the SDK
        $AT         = new AfricasTalking($username, $apiKey);

        // Get the SMS service
        $sms        = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = "+254711XXXYYY,+254733YYYZZZ";

        // Set your message
        $message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

        // Set your shortCode or senderId
        $from       = "myShortCode or mySenderId";

        try {
            // Thats it, hit send and we'll take care of the rest
            return $result = $sms->send([
                'to'      => $recipients,
                'message' => $message,
                'from'    => $from
            ]);

            print_r($result);
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
