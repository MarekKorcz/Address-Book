<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Email;
use AddressBookBundle\Form\EmailType;

class EmailController extends Controller
{
    
    /**
     * @Route("/newEmail/{personId}")
     * @Method({"GET", "POST"})
     */
    public function createNewEmailAction(Request $req, $personId){
        
        $email = new Email();
        
        $form = $this->createForm(new EmailType(), $email);
        
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Email');
            $person = $repo->find($personId);
            
            if($person != null){
                
                $phone = $form->getData();
                $phone->setPerson($person);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($phone);
                $em->flush();

                return $this->redirectToRoute(
                    'addressbook_person_showperson',
                    ['id' => $personId]
                );
            }
        }
        
        return $this->render(
            'AddressBookBundle:Email:new_email.html.twig',
            ['form' => $form->createView()]
        );
    }
    
    /**
     * @Route("/deleteEmail/{id}")
     * @Method("GET")
     */
    public function deleteEmailAction($id){
        
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Email');
        $email = $repo->find($id);
        
        if($email != null){
            
            $personId = $email->getPerson()->getId();
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($email);
            $em->flush();
            
            return $this->render(
                'addressbook_person_showperson', 
                ['id' => $personId]
            );
        }
        
        throw new createNotFoundException('There is no phone number with passed id!');
    }
}
