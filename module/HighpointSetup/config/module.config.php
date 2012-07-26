<?php
return array (
		'controllers' => array (
				'invokables' => array (
						'Setup\Controller\Institution' => 'HighpointSetup\Controller\InstitutionController' 
				) 
		),
		'router' => array (
				'routes' => array (
						'/institution/name' => array (
								'type' => 'Literal',
								'options' => array (
										'route' => '/institution/name',
										'defaults' => array (
												'controller' => 'Setup\Controller\Institution',
												'action' => 'name' 
										) 
								) 
						) 
				) 
		),
		'view_manager' => array (
				'template_path_stack' => array (
						__DIR__ . '/../view' 
				) 
		) 
// ... other configuration ...
);