<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AddressBookBundle\Entity\Address;

class PersonController extends Controller {

    /**
     * @Route("/")
     */
    public function showIndexAction() {
        
        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");
        
        $persons = $repo->sortPeopleByName();
        
        return $this->render(
            'AddressBookBundle:Person:show_index.html.twig', 
            ["persons" => $persons]
        );
    }
    
    /**
     * @Route("/{id}", requirements={"id":"\d+"})
     */
    public function showPersonAction($id){
        
        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");
        
        $person = $repo->find($id);
        
        if($person == null){
            
            throw $this->createNotFoundException();
        }
        
        return $this->render(
            'AddressBookBundle:Person:show_person.html.twig', 
            ["person" => $person]
        );
        
    }
    
    /**
     * @Route("/add")
     */
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
}
