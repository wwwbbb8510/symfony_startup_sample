<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction()
    {
        $number = rand(1, $limit);
        return $this->render('AcmeDemoBundle::Random::index.html.twig',
                array('number' => $number));
    }
}
