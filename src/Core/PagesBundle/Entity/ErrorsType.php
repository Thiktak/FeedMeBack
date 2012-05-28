<?php

namespace Core\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Core\PagesBundle\Entity\ErrorsType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Core\PagesBundle\Entity\ErrorsTypeRepository")
 */
class ErrorsType
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var text $matchtext
     *
     * @ORM\Column(name="matchtext", type="text")
     */
    private $matchtext;

    /**
     * @var text $descr
     *
     * @ORM\Column(name="descr", type="text")
     */
    private $descr;

    /**
     * @var text $more
     *
     * @ORM\Column(name="more", type="text")
     */
    private $more;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set matchtext
     *
     * @param text $matchtext
     */
    public function setMatchtext($matchtext)
    {
        $this->matchtext = $matchtext;
    }

    /**
     * Get matchtext
     *
     * @return text 
     */
    public function getMatchtext()
    {
        return $this->matchtext;
    }

    /**
     * Set descr
     *
     * @param text $descr
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    }

    /**
     * Get descr
     *
     * @return text 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set more
     *
     * @param text $more
     */
    public function setMore($more)
    {
        $this->more = $more;
    }

    /**
     * Get more
     *
     * @return text 
     */
    public function getMore()
    {
        return $this->more;
    }
}