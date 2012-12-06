<?php

namespace JDA\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SeedSubmitController extends Controller
{
    
    public function indexAction()
    {
    
		return $this->render('JDACoreBundle:Forms:seedSubmit.html.twig', array(
					'page'=> 'Seed Submission Form',
				));
    }
    
    public function testimonialAction()
    {
        
		return $this->render('JDACoreBundle:Forms:testimonial.html.twig', array(
        'page'=> 'Testimonial Submission Form',
        ));
    }
}

?>