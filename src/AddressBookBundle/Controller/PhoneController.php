<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Phone;
use AddressBookBundle\Form\PhoneType;


class PhoneController extends Controller
{
    
    /**
     * @Route("/newPhone/{personId}")
     * @Method({"GET", "POST"})
     */
    public function createNewPhoneAction(Request $req, $personId){
        
        $phone = new Phone();
        
        $form = $this->createForm(new PhoneType(), $phone);
        
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($personId);
            
            if($person != null){
            
                $phone = $form->getData();
                $phone->setPerson($person);

                $em = $this->getDoctrine()->getManager();
                $em->persist($phone);
                $em->flush();

                return $this->redirectToRoute(
                    'addressbook_person_showindex'
                );
            }
        }
        
        return $this->render(
            'AddressBookBundle:Phone:new_phone.html.twig',
            ['form' => $form->createView()]
        );
    }
}
