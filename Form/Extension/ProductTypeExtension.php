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

use Eccube\Form\Type\Admin\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gmc_hide', CheckboxType::class, [
                'label' => '[GMC用]非表示フラグ',
                'required'   => false,
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
            ])
            ->add('gmc_brand', TextType::class, [
                'label' => '[GMC用]商品ブランド',
                'required'   => false,
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
            ])
            ->add('gmc_category', IntegerType::class, [
                'label' => '[GMC用]商品カテゴリ',
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
        return ProductType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
