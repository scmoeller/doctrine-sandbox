<?php

namespace Scmoeller\DoctrineSandbox\Model;

/**
 * Dispatcher
 */
class Dispatcher
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $division;


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
     * Set division
     *
     * @param string $division
     * @return Dispatcher
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }
}
