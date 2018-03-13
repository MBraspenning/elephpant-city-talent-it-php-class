<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use AppBundle\Entity\Openingsuren;
use AppBundle\Form\Type\DateTimePickerType;
use AppBundle\Form\Type\TagsInputType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog posts.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class OpeningsurenType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // For the full reference of options defined by each form field type
        // see http://symfony.com/doc/current/reference/forms/types.html

        // By default, form fields include the 'required' attribute, which enables
        // the client-side form validation. This means that you can't test the
        // server-side validation errors from the browser. To temporarily disable
        // this validation, set the 'required' attribute to 'false':
        // $builder->add('title', null, ['required' => false, ...]);

        $builder
            ->add('maandag', null, [
                'label' => 'label.maandag',
            ])
            ->add('dinsdag', null, [
                'label' => 'label.dinsdag',
            ])
            ->add('woensdag', null, [
                'label' => 'label.woensdag',
            ])
            ->add('donderdag', null, [
                'label' => 'label.donderdag',
            ])
            ->add('vrijdag', null, [
                'label' => 'label.vrijdag',
            ])
            ->add('zaterdag', null, [
                'label' => 'label.zaterdag',
            ])
            ->add('zondag', null, [
                'label' => 'label.zondag',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Openingsuren::class,
        ]);
    }
}
