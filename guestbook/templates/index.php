<!DOCTYPE html>
<html>
<head>
	<title>GuestBook</title>
	<style>
		article {
			margin-bottom: 15px;
			padding: 10px;
			border: 1px dotted green;
		}
	</style>
</head>
<body>
	<h1>Записи</h1>
	<hr>
	<?php foreach ($data as $line){ ?>
		<article><?php echo $line->getMessage(); ?> </article>
	<?php } ?>
</body>
</html>
