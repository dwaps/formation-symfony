<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BackendController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('backend/index.html.twig');
    }
}
