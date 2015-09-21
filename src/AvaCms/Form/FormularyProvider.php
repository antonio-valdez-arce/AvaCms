<?php
namespace AvaCms\Form;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\ServiceManager\ServiceLocatorInterface;

class FormularyProvider implements ServiceLocatorAwareInterface
{
    protected $services;
    /**
     * Generates a formulary depending on the block and table
     * @param string $table_name
     * @return \Zend\Form\Form
     */
	public function getFormulary( $table_name )
	{
	   $form = new Form();

	   $table = $this->getServiceLocator()->get('AvaCms\Service\AvaCmsTables')->get($table_name);
	   
	   $table_fields = $table->fields;
        
	   foreach ( $table_fields as $name => $field )
	   {
	       $form->add(array(
	           'name' => $name,
	           'type' => $field->type,
	           'options' => array(
	               'label' => $name,
	           ),
	       ));
	   }
	   
	   $form->add(array(
	       'name' => 'Submit',
	       'type' => 'submit',
	       'attributes' => array(
	           'value' => 'Submit',
	       ),
	   ));
	   
	   return $form;
	} 
	
	/**
	 * Set service locator
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 */
	public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
	{
	    $this->services = $serviceLocator;
	}
	
	/**
	 * Get service locator
	 *
	 * @return ServiceLocatorInterface
	*/
	public function getServiceLocator()
	{
	   return $this->services;    
	}
}