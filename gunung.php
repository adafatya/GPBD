<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM gunung JOIN kekayaan_alam WHERE gunung.Id_Kekayaan_Alam = kekayaan_alam.ID");
?>

<html>
<head>    
    <title>Daftar Gunung</title>
</head>

<body>
<a href="add-gunung.php">Tambah Gunung</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama</th> <th>Luas</th> <th>Letak_Astronomis</th> <th>Jenis_Gunung</th> <th>Tinggi_Puncak</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Luas']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Jenis_Gunung']."</td>";
        echo "<td>".$data['Tinggi_Puncak']."</td>";
        echo "<td><a href='edit-gunung.php?ID=$data[ID]'>Edit</a> | <a href='delete-gunung.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>