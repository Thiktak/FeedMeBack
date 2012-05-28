<?php

namespace Core\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ErrorsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorePagesBundle:Errors:index.html.twig', array(
        ));
    }

    public function showAction($id)
    {
        return $this->render('CorePagesBundle:Errors:index.html.twig', array(
        ));
    }
}
