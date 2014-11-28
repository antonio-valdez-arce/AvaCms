<?php

namespace AvaCms\Mvc\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;

/**
 * AbstractController
 */
class CmsController extends AbstractController 
{
	
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