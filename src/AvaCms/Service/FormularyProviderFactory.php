<?php
namespace AvaCms\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AvaCms\Form\FormularyProvider;

class FormularyProviderFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		return new FormularyProvider();	    
	}  
}