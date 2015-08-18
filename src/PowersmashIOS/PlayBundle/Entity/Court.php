<?php

namespace PowersmashIOS\PlayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Court
 */
class Court
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
