<?php

	require __DIR__ . '/classes/GuestBook.php';
	$gb = new GuestBook(__DIR__ . '/db.txt');
	$data = $gb->getAll();
	
	include __DIR__ . '/templates/index.php';