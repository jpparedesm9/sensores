<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="humedad", type="string", length=255)
     */
    private $humedad;

    /**
     * @var string
     *
     * @ORM\Column(name="velocidad", type="string", length=255)
     */
    private $velocidad;

    /**
     * @var string
     *
     * @ORM\Column(name="calcio", type="string", length=255)
     */
    private $calcio;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set humedad
     *
     * @param string $humedad
     *
     * @return Test
     */
    public function setHumedad($humedad)
    {
        $this->humedad = $humedad;

        return $this;
    }

    /**
     * Get humedad
     *
     * @return string
     */
    public function getHumedad()
    {
        return $this->humedad;
    }

    /**
     * Set velocidad
     *
     * @param string $velocidad
     *
     * @return Test
     */
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    /**
     * Get velocidad
     *
     * @return string
     */
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * Set calcio
     *
     * @param string $calcio
     *
     * @return Test
     */
    public function setCalcio($calcio)
    {
        $this->calcio = $calcio;

        return $this;
    }

    /**
     * Get calcio
     *
     * @return string
     */
    public function getCalcio()
    {
        return $this->calcio;
    }
}

