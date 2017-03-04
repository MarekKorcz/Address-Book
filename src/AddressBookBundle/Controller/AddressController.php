<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Address;
use AddressBookBundle\Form\AddressType;

class AddressController extends Controller
{
    
    /**
     * @Route("/newAddress/{personId}")
     * @Method({"GET", "POST"})
     */
    
    public function createNewAddressAction(Request $req, $personId){
        
       $address = new Address();
        
        $form = $this->createForm(new AddressType(), $address);
        
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($personId);
            
            if($person != null){
                
                $address = $form->getData();
                $address->setPerson($person);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($address);
                $em->flush();

                return $this->redirectToRoute(
                    'addressbook_person_showperson',
                    ['id' => $personId]
                );
            }
        }
        
        return $this->render(
            'AddressBookBundle:Address:new_address.html.twig',
            ['form' => $form->createView()]
        );
    }
    
    /**
     * @Route("/deleteAddress/{id}")
     * @Method("GET")
     */
    public function deleteAddressAction($id){
        
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Address');
        $address = $repo->find($id);
        
        if($address != null){

            $personId = $address->getPerson()->getId();
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($address);
            $em->flush();
            
            return $this->redirectToRoute(
                'addressbook_person_showperson',
                ['id' => $personId]
            );
        }
        
        throw $this->createNotFoundException('There is no address with passed id!');
    }
}
