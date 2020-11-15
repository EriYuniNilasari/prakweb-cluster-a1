<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 3 (118140035 ERI YUNI NILASARI)</title>
</head>
<body>
	<?php
	for($i=1; $i<=50; $i++){
		$n = 0;
		for ($j=1; $j<=$i; $j++) { 
			if ($i % $j == 0) {
				$n++;
			}
		}

		if ($n == 2) {
			echo $i.' ';
		}
	}
	?>
</body>
</html>