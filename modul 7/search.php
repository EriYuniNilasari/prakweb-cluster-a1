<?php
 $key = $_POST['kunci'];
            $conn = mysqli_connect("localhost","root","","data_mahasiswa");
            $query = mysqli_query($conn, "SELECT * FROM  mahasiswa where nama like '%$key%'");
            
            $exist = false;
            while($baris = mysqli_fetch_array($query)){
                $exist = true;
                echo "Nama : "; echo $baris[0]; echo "<br>";
                echo "NRP : "; echo $baris[1]; echo "<br>";
                echo "Alamat : "; echo $baris[2]; echo "<br>";
                echo "ID_Jurusan : "; echo $baris[3]; echo "<br><br>";
            }
            if(!$exist){
                echo "Data Yang Anda Cari Tidak Ditemukan.";
            }
 ?>