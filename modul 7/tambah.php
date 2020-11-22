<?php 
		$nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $id_jur= $_POST['id_jur'];
        $conn = mysqli_connect("localhost","root","","Data_Mahasiswa");
        $query = mysqli_query($conn, "INSERT INTO mahasiswa (nrp,nama,alamat,id_jur) values ('$nrp','$nama','$alamat','$id_jur')");
        mysqli_query($conn,$query);
        echo '<script type="text/javascript">alert("Berhasil Menambahkan Data.");
        </script>'; 
?>