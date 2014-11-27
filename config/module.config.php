<?php
$settings = [
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
    'ava_cms' => $settings,
);
