<?php
	//
	$image = file_get_contents('img.jpg');
	header('Content-type: image/jpeg;');
	header("Content-Length: " . strlen($image));
	echo $image;
?>