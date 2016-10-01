<?php 

namespace App;

use Roots\Sage\Asset;
use Roots\Sage\Assets\JsonManifest;

/**
 * @param $filename
 * @return string
 */
function asset_path($filename)
{
    static $manifest;
    isset($manifest) || $manifest = new JsonManifest(get_template_directory() . '/' . Asset::$dist . '/assets.json');
    return (string) new Asset($filename, $manifest);
}

/**
 * @param $filename
 * @return contents of the file.
 */
function abovethefolder( $filename ) {
	$path = '../dist/' . $filename;
	static $manifest;
	$manifest = new JsonManifest(get_template_directory() . '/' . Asset::$dist . '/assets.json');
	$uri = (string) new Asset($filename, $manifest);
	$path = str_replace(get_template_directory_uri(), "", $uri);

	$content = file_get_contents( "../" . $path );

	
}