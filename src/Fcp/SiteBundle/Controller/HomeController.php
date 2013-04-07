<?php

namespace Fcp\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {          
       return $this->render('FcpSiteBundle:Home:index.html.twig');
    }
}
