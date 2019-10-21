<?php
	$images = scandir("images/");
	unset($images[0]);
	unset($images[1]);
	return $images;
