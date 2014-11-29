<?php
$ava_cms_settings = array(
	'tables' => array(
	    'users' => array(
	       'name' => 'user',
	       'primary_key_field' => 'user_id',
	        'fields' => array(
	           'username'      => array( 'type' => 'text', 'required'  => true, ),
        	   'email'         => array( 'type' => 'email', 'required'  => true, ),
	           'display_name'  => array( 'type' => 'text', 'required'  => true, ),
	           'password'      => array( 'type' => 'password', 'required'  => true, ),
	        ),
	    ),   
	),
    
    'blocks' => array(
        'users' => array(
            'table' => 'users',
        ),   
    ),    
);

return array(
    'ava_cms' => $ava_cms_settings,
    
    'router' => array(
        'routes' => array(
            'avacmsdefault' => array(
				'type'    => 'Literal',
                'options' => array(
                    'route'    => '/avacms',
                    'defaults' => array(
                        '__NAMESPACE__' => 'AvaCms\Mvc\Controller',
                        'controller'    => 'Cms',
                        'action'        => 'list',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:block[/:action]]',
                            'constraints' => array(
                                'block' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'controller' => 'Cms',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    
	'controllers' => array(
		'factories' => array(
			'AvaCms\Mvc\Controller\Cms' => 'AvaCms\Service\CmsControllerFactory',
		),
	    'invokables' => array(
	        
	    ),
	),
    
    'service_manager' => array(
        'factories' => array(
			'AvaCms\Service\AvaCmsBlocks' => 'AvaCms\Service\BlocksFactory',
        	'AvaCms\Service\AvaCmsTables' => 'AvaCms\Service\TablesFactory',
        ),
    ),
);