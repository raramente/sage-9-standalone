<?php
/*
This file is just a wrapper and shoulnd't be edited

Works like this:
domain.dev/foo
	// It look for the file templates/foo.php
		. If it finds the file it will load that file and nothing else.
		This is ideal if you want a page without header / footer or with a custom header / footer.
		From this custom file you can define which parts you want to add.
	// If no file is found on /templates it will look on /templates/layouts/foo.php.
		. If it finds a foo.php on the layouts folder it will load the /templates/index.php (which loads the header and footer) with the /templates/layouts/foo.php just in the content part.
	// If no file is found. It will simply load the 404.php file.

*/

include( "functions.php" );

if ( empty($_GET["q"]) ) {
	$process_uri = str_replace( "/", "", $_SERVER["REQUEST_URI"] );
}else{
	$process_uri = $_GET["q"];
}
if ( empty($process_uri) ) { // Its the front-page
	$process_uri = 'front-page';
}

// Look for the file on /templates.
if ( file_exists("templates/" . $process_uri . ".php" ) ) {
	include( "templates/" . $process_uri . ".php" );
} elseif( file_exists( "templates/layouts/" . $process_uri . ".php" ) ) {
	include( "templates/index.php" );
}else{
	include( "templates/404.php" );
}