<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MissionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label' => 'Nom de la mission', 'required' => true))
        ->add('type', TextType::class, array('label' => 'Type de mission', 'required' => false))
        ->add('adress', TextType::class, array('label' => 'Adresse du projet', 'required' => false))
        ->add('tasks', TextType::class, array('label' => 'Interventions prévues', 'required' => false))
        ->add('time', TextType::class, array('label' => 'Dates d\'intervention prévues', 'required' => false))
        ->add('path', FileType::class, array('label' => 'Image (jpg ou png)', 'required' => false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Mission'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_mission';
    }


}
