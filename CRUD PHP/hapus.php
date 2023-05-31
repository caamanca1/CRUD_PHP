<?php
    $nis = $_GET['nis'];
    $server = mysqli_connect("localhost","root","","uji_php");
    echo $nis; // cek  nis apakah memang benar ada
 
    $sql = "DELETE FROM mpl WHERE nis = '$nis'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='tampil1.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }
?> 