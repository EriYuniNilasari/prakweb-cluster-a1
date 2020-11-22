<?php 
$key = $_GET['hapus'];
        $conn = mysqli_connect("localhost","root","","data_mahasiswa");
        $query = mysqli_query($conn, "DELETE FROM mahasiswa where nrp = '$key'");

        mysqli_query($conn,$query);
        echo '<script type="text/javascript">alert("Data Tersebut Telah Dihapus.");</script>';
?>