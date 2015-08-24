<?php

namespace Softlogo\PortfolioBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PortfolioAdmin extends Admin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('name')
			->add('date')
			;
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->add('name')
			->add('category')
			->add('date')
			->add('_action', 'actions', array(
				'actions' => array(
					'show' => array(),
					'edit' => array(),
					'delete' => array(),
				)
			))
			;
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('name')
			->add('date')
			->add('category')
			->add('description')
			->add('shortDescription')
			->add('portfolioMedias', 'sonata_type_collection', array('label' => 'Media', 'required' => false, 'by_reference' => false), array('edit' => 'inline','inline' => 'table'))
		;
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields(ShowMapper $showMapper)
	{
		$showMapper
			->add('id')
			->add('date')
			->add('name')
			->add('description')
			->add('shortDescription')
			;
	}
}
