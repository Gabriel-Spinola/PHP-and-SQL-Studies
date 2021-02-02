<?php

namespace Models;

/**
 * @namespace Models
*/
class ContactModel {
    /**
     * @return mail
     * 
     * Send an email with form data.
    */
    public static function sendForm(): void {
        $mail = new \Email('smtp.gmail.com', 'sampleemail7000@gmail.com', 'Sample.123', 'Gabriel');

        $mail -> AddAddress('sampleemail7000@gmail.com', 'Gabriel');
        $mail -> FormatEmail([
            'subject' => 'MVC System Message',
            'body' => 'Body Message',
        ]);

        $mail -> SendEmail();
    }
}