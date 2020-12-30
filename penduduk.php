<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM penduduk ORDER BY Nama");
?>

<html>
<head>    
    <title>Daftar Penduduk</title>
</head>

<body>
<a href="add-penduduk.php">Tambah Penduduk</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>NIK</th> <th>Nama</th> <th>Jenis_Kelamin</th> <th>Tempat_Lahir</th> <th>Agama</th> <th>Pendidikan_Terakhir</th> <th>Pekerjaan</th> <th>Penghasilan</th> <th>ID_Wilayah</th> <th>ID_Pulau</th> <th>ID_Etnis</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['NIK']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Jenis_Kelamin']."</td>";    
        echo "<td>".$data['Tempat_Lahir']."</td>";
        echo "<td>".$data['Agama']."</td>";
        echo "<td>".$data['Pendidikan_Terakhir']."</td>";
        echo "<td>".$data['Pekerjaan']."</td>";
        echo "<td>".$data['Penghasilan']."</td>";
        echo "<td>".$data['ID_Wilayah']."</td>";
        echo "<td>".$data['ID_Pulau']."</td>";
        echo "<td>".$data['ID_Etnis']."</td>";
        echo "<td><a href='edit-penduduk.php?NIK=$data[NIK]'>Edit</a> | <a href='delete-penduduk.php?NIK=$data[NIK]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>