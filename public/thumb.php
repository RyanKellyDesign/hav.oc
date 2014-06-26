<?php

	//print_r($_GET); exit;

	header('Content-type: image/jpeg');

	$filename 		= $_GET['f'];
	$thumb_width 	= isset($_GET['w']) ? $_GET['w'] : '100';
	$thumb_height 	= isset($_GET['h']) ? $_GET['h'] : $thumb_width;

	$path = $filename;

	if(strstr($filename, '.jpg') || strstr($filename, '.jpeg')){
		$image = imagecreatefromjpeg($path);
	}elseif(strstr($filename, '.png')){
		$image = imagecreatefrompng($path);
	}else{
		$image = imagecreatefromgif($path);
	}

	$width = imagesx($image);
	$height = imagesy($image);

	$original_aspect = $width / $height;
	$thumb_aspect = $thumb_width / $thumb_height;

	if($original_aspect >= $thumb_aspect){
		// If image is wider than thumbnail (in aspect ratio sense)

		$new_height = $thumb_height;
		$new_width = $width / ($height / $thumb_height);
	}else{
		// If the thumbnail is wider than the image

		$new_width = $thumb_width;
		$new_height = $height / ($width / $thumb_width);
	}

	$thumb = imagecreatetruecolor($thumb_width, $thumb_height);

	// Resize and crop
	imagecopyresampled($thumb,
		$image,
		0 - ($new_width - $thumb_width) / 2,
		0 - ($new_height - $thumb_height) / 2,
		0, 0,
		$new_width, $new_height,
		$width, $height
	);

	echo imagejpeg($thumb);
