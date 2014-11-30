<?php

namespace AvaCms\Mvc\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;

/**
 * CmsController
 */
class CmsController extends AbstractController 
{
	
	/**
	 * Action for listing records of the table.
	 */
	public function listAction()
	{
	    $block_name = $this->params()->fromRoute('block');
	    $block = $this->getBlocks()->get($block_name);
	    
	    $block_table_name = $block->table;
	    $table = $this->getTables()->get($block_table_name);
	    
	    $this->formulary = $this->getFormularyProvider()->getFormulary($block_table_name);
	    
	    $view_model = new ViewModel();
	    $view_model->setTemplate('default/list.phtml');
	    $view_model->setVariables(array(
	        'formulary' => $this->formulary,
	    ));
	    
		return $view_model;
	}
	
	/**
	 * Action for saving record into the table
	 */
	public function saveAction( $id )
	{
	    $block_name = $this->params()->fromRoute('block');
	    $block = $this->getBlocks()->get($block_name);
	     
	    $block_table_name = $block->table;
	    $table = $this->getTables()->get($block_table_name);
	     
	    $this->formulary = $this->getFormularyProvider()->getFormulary($block_table_name);
	     
	    $view_model = new ViewModel();
	    $view_model->setTemplate('default/save.phtml');
	    $view_model->setVariables(array(
	        'formulary' => $this->formulary,
	    ));
	    
	    return $view_model;
	}
	
	/**
	 * Action for deleting records from the table
	 */
	public function deleteAction()
	{
	    return new ViewModel();
	}
}