<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href=" "></a>
</head>
<body>
    <center>

<?php
include "database.php";

$sql = "SELECT * FROM `mpl`";
$hasil = mysqli_query($server, $sql);

if (mysqli_num_rows($hasil) > 0) {
    echo "<h1>Daftar Nilai</h1>";
            
    echo "<table border = 1 cellspacing=0 cellpadding=20>
            <tr>
                <th>Nis</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Nilai 4</th>
                <th>Nilai 5</th>
                <th>Nilai 6</th>
                <th>Rata-Rata</th>
                <th>Aksi</th>
            </tr>";
        
    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>" . $row['nis'] . "</td>";
        echo "<td>" . $row['nilai1'] . "</td>";
        echo "<td>" . $row['nilai2'] . "</td>";
        echo "<td>" . $row['nilai3'] . "</td>";
        echo "<td>" . $row['nilai4'] . "</td>";
        echo "<td>" . $row['nilai5'] . "</td>";
        echo "<td>" . $row['nilai6'] . "</td>";
        echo "<td>" . ($rata2 = ($row['nilai1'] + $row['nilai2'] + $row['nilai3'] + $row['nilai4'] + $row['nilai5'] + $row['nilai6']) / 6) . "</td>";
        echo "<th><a href='hapus.php?nis=" . $row['nis'] . "'>Hapus</a></th>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada data nilai.";
}

?>

<a href="uji.php">Tambahkan Data</a>

</center>
</body>
</html>

