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

namespace Plugin\GmcSimpleFeed42\EventListener;

use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ClassNameEventListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            '@admin/Product/class_name.twig' => 'onRenderAdminClassName',
        ];
    }

    /**
     * 管理画面：商品管理＞規格管理にフォームを表示する.
     *
     * @param TemplateEvent $event
     */
    public function onRenderAdminClassName(TemplateEvent $event)
    {
        $event->addSnippet('@GmcSimpleFeed42/admin/gmc_class_name.twig');
    }
}
