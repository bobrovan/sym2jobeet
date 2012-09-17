<?php

namespace Acme\StoreBundle\Controller;

use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    public function createAction () {
        
        $product = new Product();
        $product->setName("Apple");
        $product->setPrice(5,99);
        $product->setDescription("Red from Deutchland");
        
        //get object EntityManager, which response for managing of process saving and getting object from DB
        $em = $this->getDoctrine()->getEntityManager();
        //command for managing of object (DONT create a query to DB)
        $em->persist($product);
        //look for nonsaving "managed" object
        $em->flush();
        
        return new Response('Created product id '.$product->getId());

    }
    
    public function showAction ($id) {
        $product = $this->getDoctrine()->getRepository("AcmeStoreBundle:Product")->find($id);
        
        if(!$product){
            return new Response("No products found for id = ".$id."<br>");
        }
        return new Response('Product: '.$product->getName()."<br> Price: ".$product->getPrice());
    }
}
