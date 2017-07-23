<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontendController extends Controller
{
    /**
     * @Route("/", name="frontend_home")
     */
    public function indexAction()
    {
        return $this->render('frontend/index.html.twig');
    }

}
