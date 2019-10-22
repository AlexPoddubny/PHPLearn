<?php
	$images = include __DIR__ . "/data.php";
	//var_dump($images);
	
	if (!empty($_FILES)){
		$uploaded = $_FILES['newimage'];
		if ($uploaded['error'] == 0){
			move_uploaded_file(
				$uploaded['tmp_name'],
				__DIR__ . '/images/' . $uploaded['name']
			);
		}
		header("Refresh:0"); //перезагрузка галереи
	}
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
		<form action="/gallery/" enctype="multipart/form-data"
		      method="post">
			<input type="file" name="newimage" accept=".jpg">
			<input type="submit">
		</form>
	</body>
</html>
