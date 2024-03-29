<?php

namespace Synergine\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller {
   /**
    * @Route("/", name="home")
    * @Template()
    */
   public function indexAction() {
      $games = $this->getDoctrine()->getRepository('SynergineCoreBundle:Game')->findBy();
      return array(
         'games' => array()
      );
   }
}
