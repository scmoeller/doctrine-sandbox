<?php

namespace Scmoeller\DoctrineSandbox\Model;

/**
 * Pilot
 */
class Pilot
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeRating;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeRating
     *
     * @param string $typeRating
     * @return Pilot
     */
    public function setTypeRating($typeRating)
    {
        $this->typeRating = $typeRating;

        return $this;
    }

    /**
     * Get typeRating
     *
     * @return string 
     */
    public function getTypeRating()
    {
        return $this->typeRating;
    }
}
