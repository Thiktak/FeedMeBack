<?php

namespace Core\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FeedbackController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorePagesBundle:Feedback:index.html.twig', array(
        ));
    }
}
