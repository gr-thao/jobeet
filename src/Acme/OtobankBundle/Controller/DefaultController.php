<?php

namespace Acme\OtobankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOtobankBundle:Default:index.html.twig', array('name' => $name));
    }
}
