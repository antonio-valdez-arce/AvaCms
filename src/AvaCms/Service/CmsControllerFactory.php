<?php
namespace AvaCms\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AvaCms\Mvc\Controller\AbstractController;

class CmsControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
	    $tables = $serviceLocator->get('AvaCmsTables');
	    $blocks = $serviceLocator->get('AvaCmsBlocks');
	    
	    $controller = new AbstractController();
	    $controller->setTables($tables);
	    $controller->setBlocks($blocks);
		
	    return new AbstractController();	    
	}  
}