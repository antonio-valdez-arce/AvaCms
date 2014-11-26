<?php

namespace AvaCms\Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * AbstractController
 */
class AbstractController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		return new ViewModel ();
	}
}