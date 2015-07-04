<?php
	$fullDir = realpath('./full/');
	$previewDir = realpath('./preview/');
	$fileSource = array(
		'club-regis'	=> 'club/*.{jpg,png}',
		'posn-computer'	=> 'olympiad/*.{jpg,png}',
		'obec-cms'		=> 'cms/*.{jpg,png}',
		'psu-computer'	=> 'sitc/*.{jpg,png}',
	);

	$result = array();
	if(isset($_GET['set']) && isset($fileSource[$_GET['set']])){
		foreach((array) glob($fullDir.DIRECTORY_SEPARATOR.$fileSource[$_GET['set']], GLOB_BRACE) as $file){
			$result[] = array(
				'full'	=> str_replace('\\', '/', str_replace(__DIR__, dirname($_SERVER['REQUEST_URI']), $file)),
				'preview' => str_replace('\\', '/', str_replace(__DIR__, dirname($_SERVER['REQUEST_URI']), str_replace($fullDir, $previewDir, $file)))
			);
		}
	}
	
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode(array(
		'set'	=> $_GET['set'],
		'img'	=> $result
	));