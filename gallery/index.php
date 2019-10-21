<?php
	$images = ['15-36-46.jpg', '15-48-20.jpg', '17-15-09.jpg'];
?>
<html>
	<head>
		<style>
			.photo {
				margin: 10px;
			}
			.photo img {
				border: 1px solid red;
				width: 100px;
			}
		</style>
		<title>
			Photo gallery
		</title>
	</head>
	<body>
		<h1>Photogallery</h1>
		<?php foreach ($images as $image){ ?>
			<div class="photo">
				<a href="/gallery/image.php?file=<?php echo $image ?>">
					<img src="/gallery/images/<?php echo $image ?>">
				</a>
			</div>
		<?php } ?>
	</body>
</html>
