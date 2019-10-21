<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок №2</title>
</head>
<body>
<form action="/index.php" method="post">
	<input type="number" name = "x" value="<?php $_POST['x']?>">
	+
	<input type="number" name = "y" value="<?php $_POST['y']?>">
	<input type="submit" value="=">
	<?php echo $_POST['x'] + $_POST['y']; ?>
</form>
</body>
</html>