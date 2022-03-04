<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">

	<?php
	//Пробуем вывести изображение, если неудача - создаем исключние и прекращаем выполнение программы
	try{
		if (file_exists('img.jpg')) {
			//вывод картинки
			echo '<img class="rounded-circle" src="image.php" alt="Изображение отсутствует" width="350" height="300" >';
		} else{
			throw new Exception('<br> Ошибка подключения изображения');
		}
	} catch (Exception $e) {
		echo $e->getMessage();
		die();
	}
	//подключаем скрипт счетчика
	include_once 'counter.php';
	echo '<br>';
	echo '<br>';
	//значение счетчика
	echo "<p>Количество просмотров - ".$currentCount."</p>";
	echo '<br>';
	?>
	<a href="index.php">Обновить страницу</a>

</div>

</body>
</html>