<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class EmailType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        
    }

    public function getBlockPrefix(){
        
        return 'email';
    }
}