<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	function throw_error($str){
		$imageWidth = strlen($str)*(6*1.5)+10;
		$im         = @imagecreatetruecolor($imageWidth, 32) or die('Cannot Initialize new GD image stream');
		$text_color = imagecolorallocate($im, 233,  14,  91);
		$bg         = imagecolorallocate($im, 255, 255, 255);
		imagefilledrectangle($im, 0, 0, $imageWidth, 32, $bg);
		imagestring(         $im, 6, 5,   5, $str, $text_color);
		if(!headers_sent())
			header('Content-type: image/png');

		imagepng($im);
		imagedestroy($im);
		exit;
	}

	if(isset($_GET['file']) && is_string($_GET['file'])){
		$fullFileDir = realpath(__DIR__.'/full/').DIRECTORY_SEPARATOR;
		$previewFileDir = realpath(__DIR__.'/preview/').DIRECTORY_SEPARATOR;
		$maxHeight = 512/2; $maxWidth = 640/2;

		$fullFilePath    = realpath($fullFileDir.$_GET['file']);
		//var_dump($fullFilePath);
		if($fullFilePath && strpos($fullFilePath, $fullFileDir) === 0 && is_file($fullFilePath)){
			if(($fullImageAttr = @getimagesize($fullFilePath)) === false)
				throw_error('Unable to determine image');
			//$imageExtension = image_type_to_extension($fullImageAttr[2]);
			$imageExtension = pathinfo($fullFilePath, PATHINFO_EXTENSION);
			
			if($fullImageAttr[0] > $fullImageAttr[1]){
				$previewWidth  = $maxWidth;
				$previewHeight = (int) ($maxWidth * ($fullImageAttr[1]/$fullImageAttr[0]));
			}else{
				$previewHeight = $maxHeight;
				$previewWidth  = (int) ($maxHeight * ($fullImageAttr[0]/$fullImageAttr[1]));
			}

			//try to allocate memory for resizing
			$oldMemoryLimit = ini_get('memory_limit');
			@ini_set('memory_limit', '64M');
			$fullFilePathInfo = pathinfo($fullFilePath);
			$previewFilePath  = str_replace($fullFileDir, $previewFileDir, $fullFilePathInfo['dirname']).DIRECTORY_SEPARATOR.$fullFilePathInfo['filename'].$imageExtension;
			//create full file resource
			switch ($fullImageAttr[2]) {
				case IMAGETYPE_JPEG:
					$src = imagecreatefromjpeg($fullFilePath);
				break;
				case IMAGETYPE_GIF:
					$src = imagecreatefromgif($fullFilePath);
				break;
				case IMAGETYPE_PNG:
					$src = imagecreatefrompng($fullFilePath);
				break;
				default:
					throw_error('Unable to read source image');
				break;
			}

			$targetFolder = dirname($previewFilePath);
			if(!is_dir($targetFolder))
				@mkdir($targetFolder, 0776, true);

			$dst = imagecreatetruecolor($previewWidth, $previewHeight);
			imagecopyresampled($dst, $src, 0, 0, 0, 0, $previewWidth, $previewHeight, $fullImageAttr[0], $fullImageAttr[1]);
        	imagedestroy($src);

        	$tmpPath = tempnam(sys_get_temp_dir(), 'img');

        	switch ($fullImageAttr[2]) {
				case IMAGETYPE_JPEG:
					imagejpeg($dst, $tmpPath);
				break;
				case IMAGETYPE_GIF:
					imagegif($dst, $tmpPath);
				break;
				case IMAGETYPE_PNG:
					imagepng($dst, $tmpPath);
				break;
			}
			//deallocate memory back to system
			imagedestroy($dst);

			$imgData = file_get_contents($tmpPath);

			@ini_set('memory_limit', $oldMemoryLimit);
			@file_put_contents($previewFilePath, $imgData);

			header('Content-type: '.image_type_to_mime_type($fullImageAttr[2]));
			echo $imgData;
			//if(is_file($previewFilePath))			
			//throw_error('Eiei loremkfjdgjhgdjhgfdjhdfgkj==htjfghtrnjgntrhgntrghtrngthr');

		}else{ //invalid_dir
			throw_error('Invalid Directory');
		}
	}