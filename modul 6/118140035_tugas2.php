<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 2 (Eri Yuni Nilasari 118140035)</title>
</head>
<body>
	<form method="post">
		NAMA: <input type="text" name="huruf" placeholder="Masukkan Nama"><br>
		<button type="submit" name="SIMPAN">SIMPAN</button>
	</form>

	<?php

	function panjangnama($huruf){
		$jum = strlen($huruf);
		return $jum;
	}

	if(isset($_POST['SIMPAN'])){
		$huruf = $_POST['huruf'];
		if(panjangnama($huruf)==" ") {
			echo '<font color = "red"> NAMA : anda belum mengisikan nama </font>';
			echo "<br>";
			echo '<font color = "red"> HARGA : belum terdapat harga karena anda belum mengisikan nama! </font>';
		}
		elseif(panjangnama($huruf)<=10){
			$harga = 300;
			$total = panjangnama($huruf)*$harga;
			echo '<font color = "brown"> NAMA : ' .$huruf.'</font>';
			echo "<br>";
			echo '<font color = "brown"> HARGA : ' .$total. '</font>';
		}
		elseif(panjangnama($huruf)<=20){
			$harga = 500;
			$total = panjangnama($huruf) * $harga;
			echo '<font color = "green"> NAMA : ' .$huruf.'</font>';
			echo "<br>";
			echo '<font color = "green"> HARGA : ' .$total. '</font>';
		}
		elseif(panjangnama($huruf)>20){
			$harga = 700;
			$total = panjangnama($huruf) * $harga;
			echo '<font color = "orange"> NAMA : ' .$huruf.'</font>';
			echo "<br>";
			echo '<font color = "orange"> HARGA : ' .$total. '</font>';
		}
		elseif (panjangnama($huruf)==" ") {
			echo '<font color = "red"> NAMA : anda belum mengisikan nama </font>';
			echo '<font color = "red"> HARGA : belum terdapat harga karena anda belum mengisikan nama! </font>';
		}
	}
	?>

</body>
</html>