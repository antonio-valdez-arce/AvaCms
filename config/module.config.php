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
				'type'    => 'Segment',
				'options' => array(
					'route'    => '/:block[/:action[/:id]]',
						'constraints' => array(
							'block' 	=> '[a-zA-Z][a-zA-Z0-9_-]*',
							'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id'     	=> '[0-9]*',
            			),
						'defaults' => array(
						    'action' => 'list',
						),
            		),
            ),
        ),
    ),
    
	'controllers' => array(
		'factories' => array(
			'AvaCmsController' => 'AvaCms\Service\CmsControllerFactory',
		),
	),
    
    'service_manager' => array(
        'factories' => array(
			'AvaCmsBlocks' => 'AvaCms\Service\BlocksFactory',
        	'AvaCmsTables' => 'AvaCms\Service\TablesFactory',
        ),
    ),
);
