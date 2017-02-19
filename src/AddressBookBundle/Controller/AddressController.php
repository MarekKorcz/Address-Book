<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AddressController extends Controller
{
    
    /**
     * @Route("/newAddress")
     */
    
    /*
    public function addAction(){
        
        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");
        $em = $this->getDoctrine()->getManager();
        
        $person = $repo->find(1);

        $address = new Address();
        $address->setCity("Dallas");
        $address->setStreet("Dworcowa");
        $address->setHouseNo(rand(10, 100));
        $address->setFlatNo(rand(10, 100));
        //$address->setPerson($person);
        
        $person->addAddress($address);
        
        $em->persist($person);
        $em->flush();

        return $this->redirectToRoute("addressbook_person_showindex");
    }
    */
}
