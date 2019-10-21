<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок №2</title>
</head>
<body>
<form action="/index.php" method="post">
	<input type="number" name = "x" value="<?php
		if (isset($_POST['x'])) {
			echo $_POST['x'];
		}
	?>">
	<select name="op" id="">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="number" name = "y" value="<?php
		if (isset($_POST['y'])) {
			echo $_POST['y'];
		}
	?>">
	<input type="submit" value="=">
	<?php
		if (isset($_POST['x']) && isset($_POST['y'])) {
			echo $_POST['x'] + $_POST['y'];
		}
	?>
</form>
</body>
</html>