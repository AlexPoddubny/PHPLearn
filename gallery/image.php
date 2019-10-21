<?php
	$images = include __DIR__ . "/data.php";
	$num = $_GET['num'];
	echo $images[$num] . "<br>";
?>

<a href="javascript:history.back()">
	<img src="/gallery/images/<?php echo $images[$num] ?>">
</a>