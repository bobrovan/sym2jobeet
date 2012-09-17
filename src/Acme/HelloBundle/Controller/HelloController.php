<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


//class of Controllers
class HelloController extends Controller {

    
    //Controller
    public function indexAction($name) {
        $response = new Response(json_encode(array('name' => $name)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
//    public function indexAction($first_name,$last_name, $color) {
//        
//    }

}
