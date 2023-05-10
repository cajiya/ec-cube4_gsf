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
 * @Eccube\EntityExtension("Eccube\Entity\ClassName")
 */
trait ClassNameTrait
{

    /**
     * @var string
     *
     * @ORM\Column(name="gmc_class_type", type="string", nullable=true)
     */
    private $gmc_class_type;

    /**
     * @return string
     */
    public function getGmcClassType()
    {
        return $this->gmc_class_type;
    }

    /**
     * @param string $gmc_class_type
     */
    public function setGmcClassType($gmc_class_type)
    {
        $this->gmc_class_type = $gmc_class_type;
    }
}
