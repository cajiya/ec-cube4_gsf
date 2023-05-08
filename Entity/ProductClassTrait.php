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

namespace Plugin\GmcSimpleFeed42\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\ProductClass")
 */
trait ProductClassTrait
{

    /**
     * @var string
     *
     * @ORM\Column(name="gmc_condition", type="string", nullable=true)
     */
    private $gmc_condition;

    /**
     * @var string
     *
     * @ORM\Column(name="gmc_gtin", type="string", nullable=true)
     */
    private $gmc_gtin;

    /**
     * @return string
     */
    public function getGmcCondition()
    {
        return $this->gmc_condition;
    }

    /**
     * @param string $gmc_condition
     */
    public function setGmcCondition($gmc_condition)
    {
        $this->gmc_condition = $gmc_condition;
    }

    /**
     * @return string
     */
    public function getGmcGtin()
    {
        return $this->gmc_gtin;
    }

    /**
     * @param string $gmc_gtin
     */
    public function setGmcGtin($gmc_gtin)
    {
        $this->gmc_gtin = $gmc_gtin;
    }
}
