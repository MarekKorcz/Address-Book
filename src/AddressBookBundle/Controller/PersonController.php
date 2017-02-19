<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Person;
use AddressBookBundle\Entity\User;
use AddressBookBundle\Form\PersonType;

class PersonController extends Controller {
    
    /**
     * @Route("/")
     * @Method("GET")
     */
    public function showIndexAction() {
        
        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");
        
        $user = $this->container
            ->get('security.context')
            ->getToken()
            ->getUser();
        
        if($user instanceof User){
        
            $persons = $repo->sortPeopleByName($user);
        }else{
        
            $persons = [];
        }
        
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
     * @Route("/newPerson")
     * @Method({"GET", "POST"})
     */
    public function createNewPersonAction(Request $req){
        
        $person = new Person();
        
        $form = $this->createForm(new PersonType(), $person);
        
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $person = $form->getData();
            
            $user = $this->container
                ->get('security.context')
                ->getToken()
                ->getUser();
            
            if($user instanceof User){
            
                $person->setUser($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();
                         
                return $this->redirectToRoute(
                    'addressbook_person_showindex'
                );
            }
        }
        
        return $this->render(
            'AddressBookBundle:Person:new_person.html.twig',
            ['form' => $form->createView()]
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
     * @Route("/deletePerson/{personId}")
     * @Method("GET")
     */
    public function deletePersonAction($personId){
        
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        
        $person = $repo->find($personId);
        
        if($person != null){
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($person);
            $em->flush();

            return $this->redirectToRoute('addressbook_person_showindex');
        }
    }
}
