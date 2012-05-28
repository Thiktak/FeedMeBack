<?php

namespace Core\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Core\PagesBundle\Entity\Errors
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Core\PagesBundle\Entity\ErrorsRepository")
 */
class Errors
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
     * @var integer $file
     *
     * @ORM\Column(name="file", type="integer")
     */
    private $file;

    /**
     * @var integer $line
     *
     * @ORM\Column(name="line", type="integer")
     */
    private $line;


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
     * Set file
     *
     * @param integer $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return integer 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set line
     *
     * @param integer $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * Get line
     *
     * @return integer 
     */
    public function getLine()
    {
        return $this->line;
    }
}