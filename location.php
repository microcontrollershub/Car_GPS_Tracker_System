<?php
	echo "PHP Start!<br>";
	$lat=$_GET["lat"];
	$lang=$_GET["lang"];
	echo "Data received as lat =  " . $lat . " lang = ". $lang . "<br>";
	$data= $lang . "," . $lat;
	file_put_contents('data.txt', $data);
	echo "PHP End!<br>";
?>
