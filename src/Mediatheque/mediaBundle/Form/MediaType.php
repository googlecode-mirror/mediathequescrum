<?php

namespace Mediatheque\mediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('id_type')
            ->add('disponible')
            ->add('titre')
            ->add('auteur')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'mediatheque_mediabundle_mediatype';
    }
}
