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
 * @Eccube\EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{

    /**
     * @var integer
     *
     * @ORM\Column(name="gmc_hide", type="boolean", nullable=true)
     */
    private $gmc_hide;

    /**
     * @var string
     *
     * @ORM\Column(name="gmc_category", type="string", nullable=true)
     */
    private $gmc_category;

    /**
     * @var string
     *
     * @ORM\Column(name="gmc_brand", type="string", nullable=true)
     */
    private $gmc_brand;

    /**
     * @return boolean
     */
    public function getGmcHide()
    {
        return $this->gmc_hide;
    }

    /**
     * @param boolean $gmc_hide
     */
    public function setGmcHide($gmc_hide)
    {
        $this->gmc_hide = $gmc_hide;
    }

    /**
     * @return integer
     */
    public function getGmcCategory()
    {
        return $this->gmc_category;
    }

    /**
     * @param integer $gmc_category
     */
    public function setGmcCategory($gmc_category)
    {
        $this->gmc_category = $gmc_category;
    }

    /**
     * @return string
     */
    public function getGmcBrand()
    {
        return $this->gmc_brand;
    }

    /**
     * @param string $gmc_brand
     */
    public function setGmcBrand($gmc_brand)
    {
        $this->gmc_brand = $gmc_brand;
    }

}
