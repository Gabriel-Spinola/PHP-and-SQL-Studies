<?php

namespace Models;

/**
 * @namespace Models
*/
class ContactModel {
    /**
     * @return Mail-Send
     * 
     * Send an email with form data.
     * 
     * - Error view
    */
    public static function sendForm(): void {
        $mail = new \Email('smtp.gmail.com', 'sampleemail7000@gmail.com', 'Sample.123', 'Gabriel');

        $mail -> AddAddress('sampleemail7000@gmail.com', 'Gabriel');
        $mail -> FormatEmail([
            'subject' => 'MVC System Message',
            'body' => 'Body Message',
        ]);

        if ($mail -> SendEmail()): ?>

            <script>alert('Success')</script>
        
        <?php else: ?>
            
            <script>alert('Error')</script>

        <?php endif;
    }
}