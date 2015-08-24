<?php

namespace Softlogo\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PortfolioMedia
 *
 * @ORM\Table(name="portfolio_media")
 * @ORM\Entity
 */
class PortfolioMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemorder", type="integer")
     */
    private $itemorder;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;


    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\MediaBundle\Entity\Media")
     */
    private $media;

    /**
     * @var \Section
     *
     * @ORM\ManyToOne(targetEntity="Portfolio")
     */
    private $portfolio;



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
     * Set itemorder
     *
     * @param integer $itemorder
     * @return PortfolioMedias
     */
    public function setItemorder($itemorder)
    {
        $this->itemorder = $itemorder;

        return $this;
    }

    /**
     * Get itemorder
     *
     * @return integer 
     */
    public function getItemorder()
    {
        return $this->itemorder;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PortfolioMedias
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return PortfolioMedia
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set portfolio
     *
     * @param \Softlogo\PortfolioBundle\Entity\Portfolio $portfolio
     * @return PortfolioMedia
     */
    public function setPortfolio(\Softlogo\PortfolioBundle\Entity\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    /**
     * Get portfolio
     *
     * @return \Softlogo\PortfolioBundle\Entity\Portfolio 
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
}
