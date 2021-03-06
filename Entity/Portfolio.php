<?php

namespace Softlogo\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity(repositoryClass="Softlogo\PortfolioBundle\Entity\PortfolioRepository")
 */
class Portfolio 
{

	public function __toString(){
		return $this->getName();
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
	 * @var \PortfolioMedia
	 *
	 * @ORM\OneToMany(targetEntity="PortfolioMedia", mappedBy="portfolio",cascade={"all"}, orphanRemoval=true)
	 * @ORM\OrderBy({"itemorder" = "ASC"})
	 */
	private $portfolioMedias;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="date", type="datetime", nullable=true)
	 */
	private $date;

	/**
	 *
	 * @ORM\ManyToOne(targetEntity="Category")
	 */
	private $category;

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
     * @var string
     *
     * @ORM\Column(name="short_description", type="text", nullable=true)
     */
    private $shortDescription;


	public function getFirstPortfolioMedia(){
		return $this->getPortfolioMedias()->first();
	}
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
     * @return Portfolio
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
     * @return Portfolio
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
     * Set categories
     *
     * @param array $categories
     * @return Portfolio
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return array 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set category
     *
     * @param \Softlogo\PortfolioBundle\Entity\Category $category
     * @return Portfolio
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
     * Constructor
     */
    public function __construct()
    {
        $this->portfolioMedias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add portfolioMedias
     *
     * @param \Softlogo\PortfolioBundle\Entity\PortfolioMedia $portfolioMedias
     * @return Portfolio
     */
    public function addPortfolioMedia(\Softlogo\PortfolioBundle\Entity\PortfolioMedia $portfolioMedias)
    {
		$portfolioMedias->setPortfolio($this);
        $this->portfolioMedias[] = $portfolioMedias;

        return $this;
    }

    /**
     * Remove portfolioMedias
     *
     * @param \Softlogo\PortfolioBundle\Entity\PortfolioMedia $portfolioMedias
     */
    public function removePortfolioMedia(\Softlogo\PortfolioBundle\Entity\PortfolioMedia $portfolioMedias)
    {
        $this->portfolioMedias->removeElement($portfolioMedias);
    }

    /**
     * Get portfolioMedias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPortfolioMedias()
    {
        return $this->portfolioMedias;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Portfolio
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
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Portfolio
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
}
