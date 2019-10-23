<?php
	
	$cities = load_cities();
	
	function load_cities(){
		$filename = 'cities.txt';
		if (file_exists($filename)) {
			$cities = explode("\n", file_get_contents($filename));
		} else {
			$cities = get_cities();
			file_put_contents($filename, implode("\n", $cities));
		}
		return $cities;
	}
	
	function cut_page($page, $key){
		return substr($page, strpos($page, $key) + strlen($key), strlen($page));
	}
	
	function get_cities(){
		$url = "https://uk.wikipedia.org/wiki/%D0%9C%D1%96%D1%81%D1%82%D0%B0_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8_(%D0%B7%D0%B0_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D1%96%D1%82%D0%BE%D0%BC)";
		$page = file_get_contents($url);
		//var_dump($page);
		$page = cut_page($page, '<tbody>');
		do {
			$page = cut_page($page, '</tr>');
			$page = cut_page($page, 'title="');
			$city = substr($page, 0, strpos($page, '"'));
			//removing ()
			if (strpos($city, '(') > 0){
				$city = stristr($city, ' ', true);
			}
			$cities[] = $city;
		} while (strpos($page, '</tr>') > 0);
		array_pop($cities);
		
		return $cities;
	}
	
	function detect_encode($city){
		if (mb_detect_encoding($city) == 'UTF-8'){
			$num = 2;
		} else {
			$num = 1;
		}
		return $num;
	}
	
	function get_last_letter($city){
		return substr($city, - detect_encode($city));
	}
	
	function get_first_letter($city){
		return mb_strtolower(substr($city, 0, detect_encode($city)));
	}
	
	function get_city($letter){
		global $cities;
		foreach ($cities as $city){
			if ($letter == get_first_letter($city)){
				return $city;
			}
		}
		return null;
	}
	
	function responce($city){
		if (isset($city)) {
			return get_city(get_last_letter($city));
		} else {
			return null;
		}
	}
