<?php
	function get_cities(){
		$url = "https://uk.wikipedia.org/wiki/%D0%9C%D1%96%D1%81%D1%82%D0%B0_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8_(%D0%B7%D0%B0_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D1%96%D1%82%D0%BE%D0%BC)";
		$page = file_get_contents($url);
		$key = "<tbody>";
		$page = substr($page, strpos($page, $key) + strlen($key), strlen($page));
		do {
			$key = "</tr>";
			$page = substr($page, strpos($page, $key) + strlen($key), strlen($page));
			$key = "title=\"";
			$page = substr($page, strpos($page, $key) + strlen($key), strlen($page));
			$cities[] = substr($page, 0, strpos($page, '"'));
		} while (strpos($page, '</tr>') > 0);
		array_pop($cities);
		return $cities;
	}
	
	function get_last_letter($city){
		return substr($city, -1);
	}
?>