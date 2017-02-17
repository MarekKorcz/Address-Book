<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PhoneType extends AbstractType{
    
    public function configureOptions(OptionsResolver $resolver) {
        
        $resolver->setDefaults(
            [
                'csrf_protection' => true,
                'csrf_field_name' => '_token',
                'csrf_token_id' => 'task_item'
            ]
        );
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder
            ->add('number', NumberType::class)
            ->add('save', SubmitType::class)
            ->getPropertyPath('addressbook_phone_createnewphone')
        ;
    }
    
    public function getBlockPrefix(){
        
        return 'phone';
    }
}