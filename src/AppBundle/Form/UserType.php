<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gender', TextType::class, array('label' => 'Civilité', 'required' => true))
        ->add('familyName', TextType::class, array('label' => 'Nom de famille', 'required' => true))
        ->add('firstName', TextType::class, array('label' => 'Prénom', 'required' => true))
        ->add('telephone', TextType::class, array('label' => 'Téléphone', 'required' => false))
        ->add('email', TextType::class, array('label' => 'Email', 'required' => false))
        ->add('company', TextType::class, array('label' => 'Société', 'required' => false))
        ->add('siret', TextType::class, array('label' => 'n° Siret', 'required' => false))
        ->add('address', TextType::class, array('label' => 'Adresse', 'required' => false))
        ->add('username', TextType::class, array('label' => 'Nom d\'utilisateur', 'required' => true))
        ->add('password', TextType::class, array('label' => 'Mot de passe pour l\'accès à l\'espace client', 'required' => true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
