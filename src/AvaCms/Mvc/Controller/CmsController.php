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
     * (non-PHPdoc)
     * @see \AvaCms\Mvc\Controller\AbstractController::onDispatch()
     */
    public function onDispatch(MvcEvent $e)
    {
    	// call the onDispatch method from the parent
        parent::onDispatch($e);
    	
    	$block_name = $this->params()->fromRoute('block');
    	$block = $this->getBlocks()->get($block_name);
    	
    	$block_table_name = $block->table;
    	
    	$table = $this->getTables()->get($block_table_name);
    	
    }
	
	/**
	 * Action for listing records of the table.
	 */
	public function listAction(){
		return new ViewModel();
	}
	
	/**
	 * Action for saving record into the table
	 */
	public function saveAction(){
	    return new ViewModel();
	}
	
	/**
	 * Action for deleting records from the table
	 */
	public function deleteAction(){
	    return new ViewModel();
	}
}