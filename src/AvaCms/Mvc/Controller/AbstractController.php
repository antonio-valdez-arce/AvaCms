<?php

namespace AvaCms\Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;
use Zend\Config\Config;
use Zend\ServiceManager\AbstractFactoryInterface;
use AvaCms\Form\FormularyProvider;

/**
 * AbstractController
 */
abstract class AbstractController extends AbstractActionController 
{
    /**
     * The tables configuration
     * @var Config
     */
    protected $tables;
    
    /**
     * The blocks configuration
     * @var Config
     */
    protected $blocks;
    
    /**
     * The provider to get the formulary
     */
    protected $formularyProvider;
    
	/**
	 * (non-PHPdoc)
	 * @see \Zend\Mvc\Controller\AbstractActionController::onDispatch()
	 */
    public function onDispatch(MvcEvent $e)
    {
        if (!$this->zfcUserAuthentication()->hasIdentity()) {
        	return $this->redirect()->toRoute('zfcuser/login');
        }
        
        return parent::onDispatch($e);
    }
	
    
    /**
     * Sets the tables configuration
     * @param Config $tables
     */
	public function setTables( Config $tables )
	{
		$this->tables = $tables;    
	}
	
	/**
	 * Sets the bocks configuration
	 * @param Config $blocks
	 */
	public function setBlocks( Config $blocks )
	{
		$this->blocks = $blocks;
	}
	
	/**
	 * Gets the tables configuration
	 * @param Config $tables
	 */
	public function getTables()
	{
		return $this->tables;
	}
	
	/**
	 * Gets the bocks configuration
	 */
	public function getBlocks()
	{
		return $this->blocks;
	}
	
	/**
	 * Sets the formulary provider object
	 * @param FormularyProvider $formularyProvider
	 */
	public function setFormularyProvider( $formularyProvider )
	{
	   $this->formularyProvider = $formularyProvider;    
	}
	
	/**
	 * Gets the formulary provider object
	 */
	public function getFormularyProvider()
	{
	    return $this->formularyProvider;
	}
	
	/**
	 * Abstract method for listing records of a given table
	 */
	abstract public function listAction();
	
	/**
	 * Abstract method for saving record into a given table
	 */
	abstract public function saveAction( $id );
	
	/**
	 * Abstract method for deleting records from a given table
	 */
	abstract public function deleteAction();
}