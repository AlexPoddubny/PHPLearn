<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок №2</title>
</head>
<body>
<?php
	$a = [
		'jan' => 'Январь',
		'feb' => 'Февраль',
		'mar' => 'Март',
		'apr' => 'Апрель'
	];
	echo '<p>START</p>';
	foreach ($a as $k => $month){
		echo '<p>' . $k . ' = ' . $month . '</p>';
	}
	echo 'END';
?>
</body>
</html>