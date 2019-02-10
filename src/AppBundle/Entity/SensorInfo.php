<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SensorInfo
 *
 * @ORM\Table(name="sensor_info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SensorInfoRepository")
 */
class SensorInfo
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
     * @ORM\Column(name="station", type="string", length=255)
     */
    private $station;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="co", type="string", length=255)
     */
    private $co;

    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="string", length=255)
     */
    private $dir;

    /**
     * @var string
     *
     * @ORM\Column(name="hum", type="string", length=255)
     */
    private $hum;

    /**
     * @var string
     *
     * @ORM\Column(name="llu", type="string", length=255)
     */
    private $llu;

    /**
     * @var string
     *
     * @ORM\Column(name="no2", type="string", length=255)
     */
    private $no2;

    /**
     * @var string
     *
     * @ORM\Column(name="o3", type="string", length=255)
     */
    private $o3;

    /**
     * @var string
     *
     * @ORM\Column(name="pm25", type="string", length=255)
     */
    private $pm25;

    /**
     * @var string
     *
     * @ORM\Column(name="pm10", type="string", length=255)
     */
    private $pm10;

    /**
     * @var string
     *
     * @ORM\Column(name="pre", type="string", length=255)
     */
    private $pre;

    /**
     * @var string
     *
     * @ORM\Column(name="rs", type="string", length=255)
     */
    private $rs;

    /**
     * @var string
     *
     * @ORM\Column(name="so2", type="string", length=255)
     */
    private $so2;

    /**
     * @var string
     *
     * @ORM\Column(name="tmp", type="string", length=255)
     */
    private $tmp;

    /**
     * @var string
     *
     * @ORM\Column(name="vel", type="string", length=255)
     */
    private $vel;


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
     * Set station
     *
     * @param string $station
     *
     * @return SensorInfo
     */
    public function setStation($station)
    {
        $this->station = $station;

        return $this;
    }

    /**
     * Get station
     *
     * @return string
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return SensorInfo
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set co
     *
     * @param string $co
     *
     * @return SensorInfo
     */
    public function setCo($co)
    {
        $this->co = $co;

        return $this;
    }

    /**
     * Get co
     *
     * @return string
     */
    public function getCo()
    {
        return $this->co;
    }

    /**
     * Set dir
     *
     * @param string $dir
     *
     * @return SensorInfo
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get dir
     *
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set hum
     *
     * @param string $hum
     *
     * @return SensorInfo
     */
    public function setHum($hum)
    {
        $this->hum = $hum;

        return $this;
    }

    /**
     * Get hum
     *
     * @return string
     */
    public function getHum()
    {
        return $this->hum;
    }

    /**
     * Set llu
     *
     * @param string $llu
     *
     * @return SensorInfo
     */
    public function setLlu($llu)
    {
        $this->llu = $llu;

        return $this;
    }

    /**
     * Get llu
     *
     * @return string
     */
    public function getLlu()
    {
        return $this->llu;
    }

    /**
     * Set no2
     *
     * @param string $no2
     *
     * @return SensorInfo
     */
    public function setNo2($no2)
    {
        $this->no2 = $no2;

        return $this;
    }

    /**
     * Get no2
     *
     * @return string
     */
    public function getNo2()
    {
        return $this->no2;
    }

    /**
     * Set o3
     *
     * @param string $o3
     *
     * @return SensorInfo
     */
    public function setO3($o3)
    {
        $this->o3 = $o3;

        return $this;
    }

    /**
     * Get o3
     *
     * @return string
     */
    public function getO3()
    {
        return $this->o3;
    }

    /**
     * Set pm25
     *
     * @param string $pm25
     *
     * @return SensorInfo
     */
    public function setPm25($pm25)
    {
        $this->pm25 = $pm25;

        return $this;
    }

    /**
     * Get pm25
     *
     * @return string
     */
    public function getPm25()
    {
        return $this->pm25;
    }

    /**
     * Set pm10
     *
     * @param string $pm10
     *
     * @return SensorInfo
     */
    public function setPm10($pm10)
    {
        $this->pm10 = $pm10;

        return $this;
    }

    /**
     * Get pm10
     *
     * @return string
     */
    public function getPm10()
    {
        return $this->pm10;
    }

    /**
     * Set pre
     *
     * @param string $pre
     *
     * @return SensorInfo
     */
    public function setPre($pre)
    {
        $this->pre = $pre;

        return $this;
    }

    /**
     * Get pre
     *
     * @return string
     */
    public function getPre()
    {
        return $this->pre;
    }

    /**
     * Set rs
     *
     * @param string $rs
     *
     * @return SensorInfo
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string
     */
    public function getRs()
    {
        return $this->rs;
    }

    /**
     * Set so2
     *
     * @param string $so2
     *
     * @return SensorInfo
     */
    public function setSo2($so2)
    {
        $this->so2 = $so2;

        return $this;
    }

    /**
     * Get so2
     *
     * @return string
     */
    public function getSo2()
    {
        return $this->so2;
    }

    /**
     * Set tmp
     *
     * @param string $tmp
     *
     * @return SensorInfo
     */
    public function setTmp($tmp)
    {
        $this->tmp = $tmp;

        return $this;
    }

    /**
     * Get tmp
     *
     * @return string
     */
    public function getTmp()
    {
        return $this->tmp;
    }

    /**
     * Set vel
     *
     * @param string $vel
     *
     * @return SensorInfo
     */
    public function setVel($vel)
    {
        $this->vel = $vel;

        return $this;
    }

    /**
     * Get vel
     *
     * @return string
     */
    public function getVel()
    {
        return $this->vel;
    }
}

