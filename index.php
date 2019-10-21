<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок №2</title>
</head>
<body>
<form action="/index.php" method="post">
	<input type="number" name = "x" value="<?php
		if (isset($_POST)) {
			echo $_POST['x'];
		}
	?>">
	+
	<input type="number" name = "y" value="<?php
		if (isset($_POST)) {
			echo $_POST['y'];
		}
	?>">
	<input type="submit" value="=">
	<?php
		if (isset($_POST['x']) && isset($_POST['y'])) {
			$res = $_POST['x'] + $_POST['y'];
		} else {
			$res = "";
		}
		echo $res;
	?>
</form>
</body>
</html>