<?php
	if (file_exists('count.txt')){
		$file = file('count.txt');
		$currentCount = implode("", $file);
		$file = fopen('count.txt', w);
		fwrite($file, $currentCount + 1);
		fclose($file);
	}else{
		$file = fopen('count.txt', w);
		fwrite($file, 1);
		fclose($file);
	}
?>