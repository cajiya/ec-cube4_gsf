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

namespace Plugin\GmcSimpleFeed42\Repository;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Eccube\Entity\ProductClass;
use Eccube\Repository\AbstractRepository;


/**
 * ProductClassRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductClassRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductClass::class);
    }
    /**
     * find all.
     *
     * @return array
     */
    // public function findAll()
    // {
    //     $query = $this
    //         ->getEntityManager()
    //         ->createQuery('SELECT m FROM Eccube\Entity\ProductClass m ORDER BY m.id DESC');
    //     $result = $query
    //         ->getResult(Query::HYDRATE_ARRAY);

    //     return $result;
    // }
}
