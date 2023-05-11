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

namespace Plugin\GmcSimpleFeed42\Controller;

use Eccube\Controller\AbstractController;

use Eccube\Repository\ProductRepository;
use Eccube\Repository\ProductClassRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Knp\Component\Pager\PaginatorInterface;

class ConfigController extends AbstractController
{
    /**
     * @Route("/%eccube_admin_route%/gmc/config", name="gmc_simple_feed42_admin_config", methods={"GET"} )
     * @Template("@GmcSimpleFeed42/admin/gmc_config.twig")
     */
    public function index(
        Request $request, 
        PaginatorInterface $paginator, 
        ProductRepository $productRepository,
        ProductClassRepository $productClassRepository, 
        $page_no = null )
    {

        $qb = $productClassRepository->findBy(['visible'=>true],['id'=>'ASC']);
        $pagination = $paginator->paginate($qb);
        return [
            'pagination' => $pagination,
        ];
    }
}
