<?php
	$images = include __DIR__ . "/data.php";
	//var_dump($images);
?>
<html>
	<head>
		<style>
			.photo {
				margin: 10px;
			}
			.photo img {
				border: 1px solid red;
				width: 200px;
			}
		</style>
		<title>
			Photo gallery
		</title>
	</head>
	<body>
		<h1>Photogallery</h1>
		<?php foreach ($images as $num => $image){ ?>
			<div class="photo">
				<a href="/gallery/image.php?num=<?php echo $num ?>">
					<img src="images/<?php echo $image ?>">
				</a>
			</div>
		<?php } ?>
	</body>
</html>
