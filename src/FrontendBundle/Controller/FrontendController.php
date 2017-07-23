<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontendController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('frontend/index.html.twig');
    }

}
