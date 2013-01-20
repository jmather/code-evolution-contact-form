<?php

if (isset($_POST['contact'])) {

    if (isset($_POST['csrf_token']) == false || $_POST['csrf_token'] != $_SESSION['csrf']) {
        $error = 'There was an issue with loading this page.';
    }

    $contact = new Model\Contact($_POST['contact']);

    if ($error == false && $contact->message == '') {
        $error = 'The message is empty';
    }

    if (false == $error) {
        $mailer = new Service\ContactMailer();

        $mailer->send($contact);

        $view = 'thankyou';
    }
}
