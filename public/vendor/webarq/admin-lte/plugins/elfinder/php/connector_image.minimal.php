<?php

error_reporting(0); // Set E_ALL for debuging

date_default_timezone_set('Asia/Jakarta');

$valid = false;
if (isset($_GET['token'])) {
	$token = $_GET['token'];
	$validToken = sha1(date('Y-m-d'). 'admin-valid-mitu-gemas');
	if ($token == $validToken) {
		$valid = true;
	}
}

if (!$valid){
	header("Location: https://www.google.com/search?q=cara%20hack%20lewat%20elfinder");
	die();
}

include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderConnector.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinder.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeDriver.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeLocalFileSystem.class.php';
// Required for MySQL storage connector
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeMySQL.class.php';
// Required for FTP connector support
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeFTP.class.php';


/**
 * Simple function to demonstrate how to control file access using "accessControl" callback.
 * This method will disable accessing files/folders starting from '.' (dot)
 *
 * @param  string  $attr  attribute name (read|write|locked|hidden)
 * @param  string  $path  file path relative to volume root directory started with directory separator
 * @return bool|null
 **/
function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0       // if file/folder begins with '.' (dot)
		? !($attr == 'read' || $attr == 'write')    // set read+write to false, other (locked+hidden) set to true
		:  null;                                    // else elFinder decide it itself
}


// Documentation for connector options:
// https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options
$opts = array(
	// 'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',   // driver for accessing file system (REQUIRED)
			// 'path'          => '../../../contents/images',         // path to files (REQUIRED)
			// 'URL'           => dirname($_SERVER['PHP_SELF']) . '/../../../contents/images', // URL to files (REQUIRED)

			'path'          => '../../contents/images',                 // path to files (REQUIRED)
			'URL'           => dirname($_SERVER['PHP_SELF']) . '/../../contents/images', // URL to files (REQUIRED)
			'accessControl' => 'access'             // disable and hide dot starting files (OPTIONAL),

		)
	)
);




// run elFinder
$connector = new elFinderConnector(new elFinder($opts));
$connector->run();
