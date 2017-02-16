<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType{
    
    public function configureOptions(OptionsResolver $resolver){
        
        $resolver->setDefaults(
            [
                'csrf_protection' => true,
                'csrf_field_name' => '_token',
                // a unique key to help generate the secret token
                'csrf_token_id'   => 'task_item',
            ]
        );
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class)
        ;
    }
    
    public function getName(){
        
        return 'person';
    }
}