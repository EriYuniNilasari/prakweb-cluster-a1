<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 (118140035 ERI YUNI NILASARI)</title>
</head>
<body>
	<?php
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

	echo "Mengurutkan data dari A-Z : <br>";
	sort($data);
	$n=0;
	foreach ($data as $value) {
		echo "$n.$value <br>";
		$n++;
	}

	echo "<br>Mengurutkan data dari Z-A : <br>";
	rsort($data);
	$n=0;
	foreach ($data as $value) {
		echo "$n.$value <br>";
		$n++;
	}
	?>

</body>
</html>