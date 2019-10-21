<?php
	$file = $_GET['file'];
	echo $file . "<br>";
?>
<a href="javascript:history.back()">
	<img src="/gallery/images/<?php echo $file ?>">
</a>