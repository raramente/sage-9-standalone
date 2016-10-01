<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

/**
 * Require Composer autoloader if installed on it's own
 */
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require_once $composer;
}


function get_template_directory() {
	return str_replace("functions.php", "", __FILE__);
}

function get_template_directory_uri() {
	return "http://" . $_SERVER["SERVER_NAME"];
}

$sage_includes = [
    'src/helpers.php'
];
array_walk($sage_includes, function ($file) {
	if ( file_exists($file) ) {
		include( $file );
	}
});
