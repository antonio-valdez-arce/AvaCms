<?php
$ava_cms_settings = [
	'tables' => [
	    'users' => [
	       'name' => 'user',
	       'primary_key_field' => 'user_id',
	        'fields' => [
	           'username'      => [ 'type' => 'text', 'required'  => true, ],
        	   'email'         => [ 'type' => 'email', 'required'  => true, ],
	           'display_name'  => [ 'type' => 'text', 'required'  => true, ],
	           'password'      => [ 'type' => 'password', 'required'  => true, ],
	        ],
	    ],   
	],
    
    'blocks' => [
        'users' => [
            'table' => 'users',
        ],   
    ],    
];

return array(
    'ava_cms' => $ava_cms_settings,
    
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
