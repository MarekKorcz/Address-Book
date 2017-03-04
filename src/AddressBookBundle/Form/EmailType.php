<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType as SymfonyEmailType;

class EmailType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
            ->add('address', SymfonyEmailType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function getBlockPrefix(){
        
        return 'email';
    }
}