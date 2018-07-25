<?php

/*--- Custom Header Function --- */

add_theme_support( 'custom-header' );

$headerzone = array(
	'default-image'          => '',
	'width'                  => 100,
	'height'                 => 550,
	'flex-height'            => false,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $headerzone );


 ?>
