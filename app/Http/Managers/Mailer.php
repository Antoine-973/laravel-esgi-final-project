<?php

namespace App\Http\Managers;


use Exception;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Mailer
{
    function sendEmail($subject, $mailTo, $body){

        try {
            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                ->setUsername(env('MAIL_EMAIL'))
                ->setPassword(env('MAIL_PASSWORD'))
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message($subject))
                ->setFrom([env('MAIL_EMAIL') => env('MAIL_USERNAME')])
                ->setTo([$mailTo])
                ->setBody($body)
                ->setContentType('text/html')
            ;

            // Send the message
            $mailer->send($message);

            echo 'Email has been sent.';
        } catch(Exception $e) {
            echo $e->getMessage();
        }

    }
}
