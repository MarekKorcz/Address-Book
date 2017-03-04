<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddressType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
            ->add('city', TextType::class)
            ->add('street', TextType::class)
            ->add('house_no', TextType::class)  
            ->add('flat_no', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function getBlockPrefix(){
        
        return 'address';
    }
}