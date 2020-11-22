<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 1 (Eri Yuni Nilasari 118140035)</title>
</head>
<body>
	<h2>Menghitung Faktorial dari suatu bilangan</h2>
	<form Method ="POST">
		<input type="number" name="faktorial" placeholder="masukkan angka" required><br><br>
		<input type="submit" name="Hitung" value="Hitung">
	</form>
	<?php
	function faktorial($angka){
		$nilai = 1;
		$faktorial = 1;
		while ($nilai <= $angka) {
			$faktorial = $nilai * $faktorial;
			$nilai = $nilai + 1;
		}
		return $faktorial;
	}

	if (isset($_POST['Hitung'])) {
		$angka = $_POST['faktorial'];
		echo "<br>";
		echo "Hasil dari faktorial ".$angka." = ".faktorial($angka);
	}
	?>

</body>
</html>