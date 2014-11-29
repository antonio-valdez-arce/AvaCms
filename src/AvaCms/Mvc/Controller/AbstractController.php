<?php

namespace AvaCms\Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Mvc\MvcEvent;
use Zend\Config\Config;

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
	 * @param Config $blocks
	 */
	public function getBlocks()
	{
		return $this->blocks;
	}
	
	/**
	 * Abstract method for listing records of a given table
	 */
	abstract public function listAction();
	
	/**
	 * Abstract method for saving record into a given table
	 */
	abstract public function saveAction();
	
	/**
	 * Abstract method for deleting records from a given table
	 */
	abstract public function deleteAction();
}