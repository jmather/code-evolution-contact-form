<?php

use Symfony\Component\HttpFoundation\Request;


$app = require '../config/app.php';

$app['contact_form'] = function() use ($app) {
    $formBuilder = $app['form.factory']->createBuilder(new \Form\ContactForm(), $data);
    $form = $formBuilder->getForm();
    return $form;
};

$app->match('/', 'contact_form_controller:formAction')->method('GET|POST')->bind('home');

$app->get('/thanks', 'contact_form_controller:thankYouAction')->bind('thank-you');


$app->run();
