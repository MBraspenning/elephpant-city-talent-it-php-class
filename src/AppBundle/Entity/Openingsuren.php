<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OpeningsurenRepository")
 * @ORM\Table(name="symfony_demo_openingsuren")
 *
 * Defines the properties of the Post entity to represent the blog posts.
 *
 * See http://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See http://symfony.com/doc/current/cookbook/doctrine/reverse_engineering.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class Openingsuren
{
    /**
     * Use constants to define configuration options that rarely change instead
     * of specifying them in app/config/config.yml.
     *
     * See http://symfony.com/doc/current/best_practices/configuration.html#constants-vs-configuration-options
     */
/*    const NUM_ITEMS = 10;
*/

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $maandag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $dinsdag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $woensdag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $donderdag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $vrijdag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $zaterdag;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $zondag;

    public function __construct()
    {
        $this->maandag = '';
        $this->dinsdag = '';
        $this->woensdag = '';
        $this->donderdag = '';
        $this->vrijdag = '';
        $this->zaterdag = '';
        $this->zondag = '';
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMaandag()
    {
        return $this->maandag;
    }

    public function getDinsdag()
    {
        return $this->dinsdag;
    }

    public function getWoensdag()
    {
        return $this->woensdag;
    }

    public function getDonderdag()
    {
        return $this->donderdag;
    }

    public function getVrijdag()
    {
        return $this->vrijdag;
    }

    public function getZaterdag()
    {
        return $this->zaterdag;
    }

    public function getZondag()
    {
        return $this->zondag;
    }

    public function setMaandag($uren)
    {
        $this->maandag = $uren;
    }

    public function setDinsdag($uren)
    {
        $this->dinsdag = $uren;
    }

    public function setWoensdag($uren)
    {
        $this->woensdag = $uren;
    }

    public function setDonderdag($uren)
    {
        $this->donderdag = $uren;
    }

    public function setVrijdag($uren)
    {
        $this->vrijdag = $uren;
    }

    public function setZaterdag($uren)
    {
        $this->zaterdag = $uren;
    }

    public function setZondag($uren)
    {
        $this->zondag = $uren;
    }

}
