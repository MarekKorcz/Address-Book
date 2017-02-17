<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Person;
use AddressBookBundle\Form\PersonType;

class PersonController extends Controller {

    
    /**
     * @Route("/new")
     * @Method({"GET", "POST"})
     */
    public function createNewPerson(Request $req){
        
        $person = new Person();
        
        $form = $this->createForm(new PersonType(), $person);
        
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $person = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            
            return $this->redirectToRoute(
                'addressbook_person_showindex'
            );
        }
        
        return $this->render(
            'AddressBookBundle:Person:new_person.html.twig',
            ['form' => $form->createView()]
        );
    }
    
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
     * @Route("/{id}/editName", requirements={"id":"\d+"})
     */
    public function editNameAction(Request $req, $id){
        
        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");
        $person = $repo->find($id);
        
        if($person == null){
            
            throw $this->createNotFoundException();
        }
               
        $form = $this->createForm(new PersonType(), $person);
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $changedPerson = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($changedPerson);
            $em->flush();
            
            return $this->render(
                'AddressBookBundle:Person:show_person.html.twig', 
                ["person" => $changedPerson]
            );
        }
        
        return $this->render(
            'AddressBookBundle:Person:edit_name.html.twig',
            ["form" => $form->createView()]
        );
    }
    
    
    
    
    /**
     * @Route("/add")
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
