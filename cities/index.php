<?php
	require __DIR__ . "/func.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cities Game</title>
</head>
<body>
	<h1>Сыграем в города?</h1>
	<?php
		if (isset($_POST['city'])){
			echo "<p>Мой ответ: " . responce($_POST['city']) . "</p>";
		}
	?>
	<label>Введите город:</label>
	<form action="/cities/index.php" method="post">
		<input type="text" name="city" value="<?php if (isset($_POST['city'])){ echo $_POST['city']; }; ?>">
		<input type="submit" value="Ввести">
	</form>
</body>
</html>
