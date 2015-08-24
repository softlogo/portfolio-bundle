<?php

namespace Softlogo\PortfolioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Softlogo\PortfolioBundle\Entity\Portfolio;
use Softlogo\PortfolioBundle\Form\PortfolioType;

/**
 * Portfolio controller.
 *
 */
class PortfolioController extends Controller
{
	public function getCatRepository()
	{
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('SoftlogoPortfolioBundle:Category');
	}

	public function getRepository()
	{
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('SoftlogoPortfolioBundle:Portfolio');
	}

	public function getPageRepository()
	{
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('SoftlogoCMSBundle:Page');
	}
    /**
     * Lists all Portfolio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SoftlogoPortfolioBundle:Portfolio')->findAll();

		$categories = $this->getCatRepository()->findBy(array('parent'=>null), array('itemorder' => 'ASC'));
		$menu = $this->getPageRepository()->findBy(array('isMenu'=>true), array('itemorder' => 'ASC'));
		$page = $this->getPageRepository()->findOneByAnchor("portfolio");
        return $this->render('SoftlogoPortfolioBundle:Portfolio:index.html.twig', array(
            'entities' => $entities,
            'menu' => $menu,
            'page' => $page,
            'categories' => $categories,
            'category' => null,
        ));
    }


    /**
     * Finds and displays a Portfolio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SoftlogoPortfolioBundle:Portfolio')->find($id);
		$categories = $this->getCatRepository()->findBy(array(), array('itemorder' => 'ASC'));
		$menu = $this->getPageRepository()->findBy(array('isMenu'=>true), array('itemorder' => 'ASC'));
		$page = $this->getPageRepository()->findOneByAnchor("portfolio");

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Portfolio entity.');
        }


        return $this->render('SoftlogoPortfolioBundle:Portfolio:show.html.twig', array(
            'entity'      => $entity,
            'categories' => $categories,
            'menu' => $menu,
            'page' => $page,
        ));
    }
	public function findByCategoryAction(Request $request,$id){
		$category= $this->getCatRepository()->findOneBy(array('id'=>$id), array());
		$categories = $this->getCatRepository()->findBy(array('parent'=>null), array('itemorder' => 'ASC'));
		$entities = $this->getRepository()->findBy(array('category'=>$category), array('id' => 'DESC'));
        return $this->render('SoftlogoPortfolioBundle:Portfolio:index.html.twig', array(
            'entities' => $entities,
            'categories' => $categories,
            'category' => $category,
        ));
	}


}
