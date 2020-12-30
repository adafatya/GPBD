<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM bukit JOIN kekayaan_alam WHERE bukit.Id_Kekayaan_Alam = kekayaan_alam.ID");
?>

<html>
<head>
    <title>Daftar Bukit</title>
</head>

<body>
<a href="add-bukit.php">Tambah Bukit</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama</th> <th>Luas</th> <th>Letak_Astronomis</th> <th>Tinggi_Puncak</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Luas']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Tinggi_Puncak']."</td>";
        echo "<td>".$data['Kedalaman']."</td>";
        echo "<td><a href='edit-bukit.php?ID=$data[ID]'>Edit</a> | <a href='delete-bukit.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>