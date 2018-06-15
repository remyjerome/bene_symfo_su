<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Front/Default/index.html.twig');
    }

    public function profilAction()
    {
        return $this->render('@Front/profil.html.twig');
    }
}
