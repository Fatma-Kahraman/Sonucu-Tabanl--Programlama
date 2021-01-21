<?php

	//array_values

	$_POST=["ad"=>"emre",
			"soyad"=>"kör",
			"kurs"=>"php",
			"fiyat"=>30];

	echo "<pre>";

	print_r($_POST);

	print_r(array_values($_POST));

	//array_map

	function islem($deger) {

		return($deger."=?,");

	}

	$sonuc=array_map("islem", $_POST);
	print_r($sonuc);

	//array_keys

	print_r(array_keys($_POST));

	echo "</pre>";

	function addValue($argse) {

		$values=implode(',',array_map(function($item){
			return $item.'=?';
		},array_keys($argse)));

		return $values;

	}

	echo addValue($_POST);
	echo "<br>";
	print_r(array_values($_POST));

?>