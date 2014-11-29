<?php
namespace AvaCms\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AvaCms\Mvc\Controller\CmsController;
use Zend\Config\Config;

class CmsControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
	    $tables = $serviceLocator->getServiceLocator()->get('AvaCms\Service\AvaCmsTables');
	    $blocks = $serviceLocator->getServiceLocator()->get('AvaCms\Service\AvaCmsBlocks');
	    
	    $controller = new CmsController();
	    $controller->setTables($tables);
	    $controller->setBlocks($blocks);
		
	    return $controller;	    
	}  
}