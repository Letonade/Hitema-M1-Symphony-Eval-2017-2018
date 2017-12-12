<?php

namespace AppBundle\Form;

use AppBundle\Entity\Livre;
use AppBundle\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class LivreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
         * add
         *      - nom du champ utilisé dans la vue
         *      - type de champ : http://symfony.com/doc/current/reference/forms/types.html
         * ²    - options du champ
         *          contraintes de validation : https://symfony.com/doc/current/reference/constraints.html
         * */
        $builder
            ->add('firstname', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => "Vous n'avez pas saisi votre prénom"]),
                ]
            ])
            ->add('titre',TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => "Vous n'avez pas saisi votre prénom"]),
                ]
            ])
            ->add('auteur',TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => "Vous n'avez pas saisi votre prénom"]),
                ]
            ])
            ->add('categorie',EntityType::class,[
                'class' => Categorie::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('description',TextType::class)
            ->add('image',TextType::class)
            ->add('date_publication',TextType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
