<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php 

	$bookList = array ("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц");

	$length = count($bookList);
	
	for ($i = 0; $i < $length; $i++) {
		echo "<ol>";
		echo $bookList[$i];
		echo "</ol>";
	}









	 ?>
	
</body>
</html>