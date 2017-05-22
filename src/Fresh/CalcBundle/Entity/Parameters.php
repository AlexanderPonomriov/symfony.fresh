<?php

namespace Fresh\CalcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parameters")
 */
class Parameters
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $parameterName;


    protected $siteType;

    /**
     * @ORM\Column(type="string")
     */
    protected $parameterValue;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;


    protected $parameterType;






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
     * Set parameterName
     *
     * @param string $parameterName
     *
     * @return Parameters
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;

        return $this;
    }

    /**
     * Get parameterName
     *
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * Set parameterValue
     *
     * @param string $parameterValue
     *
     * @return Parameters
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Get parameterValue
     *
     * @return string
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Parameters
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Parameters
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
