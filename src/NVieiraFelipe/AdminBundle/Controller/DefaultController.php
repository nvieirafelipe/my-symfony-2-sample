<?php

namespace NVieiraFelipe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NVieiraFelipeAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
