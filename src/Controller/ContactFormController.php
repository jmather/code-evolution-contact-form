<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;

class ContactFormController
{
    protected $app;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    public function formAction(Request $request) {
        $form = $this->app['contact_form'];

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid())
            {

                $url = $this->app['url_generator']->generate('thank-you');
                return $this->app->redirect($url);
            }
        }

        $form_view = $form->createView();

        $parameters = array(
            'form' => $form_view,
        );
        return $this->app['twig']->render('index.html.twig', $parameters);

    }

    public function thankYouAction()
    {
        return $this->app['twig']->render('thank-you.html.twig');
    }
}
