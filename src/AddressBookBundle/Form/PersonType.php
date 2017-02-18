<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class)
        ;
    }
    
    public function getBlockPrefix(){
        
        return 'person';
    }
}