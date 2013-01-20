<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

$error = false;
$contact = new Model\Contact();

$view = 'form';


require __DIR__.'/../inc/form_check.php';

$_SESSION['csrf'] = uniqid('csrf_token');

require __DIR__.'/../views/template.php';
