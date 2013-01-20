<?php

namespace Service;

use Model\Contact;

class ContactMailer
{
    public function send(Contact $contact)
    {
        $from = $contact->name.' <'.$contact->email.'>';

        $header = 'From: '.$from;

        mail('myemail@example.com', 'contact form request', $header);
    }
}
