<?php
$manifest = array(
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			1 => "6.5.*",
		),
	),
	'acceptable_sugar_flavors' => array (
		0 => 'CE',
	),
	'name' 				=> 'SoulwareBreadcrumbs',
	'description'                   => "Adds Module Icon and Breadcrumbs to the Module line.",
	'author' 			=> 'Tibor Piri, Soulware Ltd.',
	'published_date'                => '2015/06/24',
	'version' 			=> '0.9.0',
	'type' 				=> 'module',
	'icon' 				=> '',
	'is_uninstallable' => true,
);
$installdefs = array(
	'id'=> 'SoulwareBreadcrumbs',
        'post_uninstall' => array(
	        '<basepath>/scripts/post_uninstall.php',
	),
);