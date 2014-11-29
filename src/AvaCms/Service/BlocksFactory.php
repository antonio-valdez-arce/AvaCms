<?php
namespace AvaCms\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Config\Config;

class BlocksFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
	    $config = $serviceLocator->get('config');
		return new Config($config['ava_cms']['blocks']);	    
	}  
}