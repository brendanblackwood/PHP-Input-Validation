<?php

function __autoload($filename) {
	$fileLocation = str_replace('_', '/', $filename);
	require('../' . $fileLocation . '.php');
}

class Request {
	public function __construct(){
	}
	
	public function getType(){
		return 'Web';
	}

	public static function displayErrors(){
		return null;
	}
}

$oRequest = new Request();

?>