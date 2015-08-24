<?php

namespace Softlogo\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="portfolio_category")
 * @ORM\Entity(repositoryClass="Softlogo\PortfolioBundle\Entity\CategoryRepository")
 */
class Category
{
	public function __toString(){
		return $this->getParent()." -- ".$this->getName();
	}
	public function getFullName(){
		return $this->__toString();
	}

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
	 *
	 * @ORM\ManyToOne(targetEntity="Category")
	 */
	private $parent;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemorder", type="integer")
     */
    private $itemorder;

	/**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\MediaBundle\Entity\Media")
     */
    private $media;

	/**
	 * @ORM\OneToMany(targetEntity="Category", mappedBy="parent", cascade="persist", orphanRemoval=true)
	 * @ORM\OrderBy({"itemorder" = "ASC"})
     */
    private $categories;

	/**
	 * @ORM\OneToMany(targetEntity="Portfolio", mappedBy="category", cascade="persist", orphanRemoval=true)
	 * @ORM\OrderBy({"itemorder" = "ASC"})
     */
    private $portfolios;


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set itemorder
     *
     * @param integer $itemorder
     * @return Category
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
     * Set category
     *
     * @param \Softlogo\PortfolioBundle\Entity\Category $category
     * @return Category
     */
    public function setCategory(\Softlogo\PortfolioBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Softlogo\PortfolioBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set parent
     *
     * @param \Softlogo\PortfolioBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\Softlogo\PortfolioBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Softlogo\PortfolioBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return Category
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
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->portfolios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categories
     *
     * @param \Softlogo\PortfolioBundle\Entity\Category $categories
     * @return Category
     */
    public function addCategory(\Softlogo\PortfolioBundle\Entity\Category $categories)
    {
		$categories->setParent($this);
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Softlogo\PortfolioBundle\Entity\Category $categories
     */
    public function removeCategory(\Softlogo\PortfolioBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add portfolios
     *
     * @param \Softlogo\PortfolioBundle\Entity\Portfolio $portfolios
     * @return Category
     */
    public function addPortfolio(\Softlogo\PortfolioBundle\Entity\Portfolio $portfolios)
    {
		$portfolios->setCategory($this);
        $this->portfolios[] = $portfolios;

        return $this;
    }

    /**
     * Remove portfolios
     *
     * @param \Softlogo\PortfolioBundle\Entity\Portfolio $portfolios
     */
    public function removePortfolio(\Softlogo\PortfolioBundle\Entity\Portfolio $portfolios)
    {
        $this->portfolios->removeElement($portfolios);
    }

    /**
     * Get portfolios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPortfolios()
    {
        return $this->portfolios;
    }
}
