<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GmcSimpleFeed42\Form\Extension;

use Eccube\Form\Type\Admin\ProductClassEditType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductClassEditTypeExtension extends AbstractTypeExtension
{


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('gmc_condition', ChoiceType::class, [
                'label' => '[GMC用]コンディション',
                'choices'  => [
                    '新品' => 'new',
                    '再生品' => 'refurbished',
                    '中古品' => 'used',
                ],
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
            ])
            ->add('gmc_gtin', TextType::class, [
                'label' => '[GMC用]GTIN',
                'required'   => false,
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductClassEditType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductClassEditType::class];
    }
}
