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
    	parent::onDispatch($e);
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