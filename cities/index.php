<?php
	require __DIR__ . "/func.php";
?>
<html>
<head>
	<title>Cities Game</title>
</head>
<body>
	<h1>Сыграем в города?</h1>
	<?php
		$cities = get_cities();
		//var_dump($cities);
	?>
	<label>Введите город:</label>
	<form action="/index.php" method="post">
		<input type="text" name="city">
		<input type="submit" value="Ввести">
	</form>
</body>
</html>
