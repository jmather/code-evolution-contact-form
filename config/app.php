<?php

require __DIR__.'/../vendor/autoload.php';

use Silex\Provider\FormServiceProvider;

$app = new Silex\Application();


$app->register(new Silex\Provider\TwigServiceProvider(), array(
'twig.path' => __DIR__.'/../templates',
));


$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
'locale_fallback' => 'en',
));

$app->register(new FormServiceProvider());


$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\ServiceControllerServiceProvider());


$app['contact_form_controller'] = function() use ($app) {
    return new \Controller\ContactFormController($app);
};

$app['debug'] = true;

return $app;
