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
use Knp\Component\Pager\PaginatorInterface;

class FeedController extends AbstractController
{
    /**
     * @Route("/gmc/feed", name="gmc_feed", methods={"GET"} )
     * @Route("/gmc/feed/{page_no}", methods={"GET"}, requirements={"id" = "\d+"})
     * 
     * @param String $page_no
     * 
     */
    public function index(
        Request $request, 
        PaginatorInterface $paginator, 
        ProductRepository $productRepository,
        ProductClassRepository $productClassRepository, 
        $page_no = null )
    {
        if( $page_no === null ) $page_no = 1;
        $qb = $productClassRepository->findBy(['visible'=>true],['id'=>'ASC']);
 
        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            100
        );

        $content = $this->renderView('@GmcSimpleFeed42/gmc_feed.twig', [
            'pagination' => $pagination,
            'page_no' => $page_no,
            'test' => 1
        ]);
        return new Response(
            $content,
            Response::HTTP_OK,
            ['content-type' => 'application/xml']
            // ['content-type' => 'text/html']
        );
    }
}
