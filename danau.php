<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM danau JOIN kekayaan_alam WHERE danau.Id_Kekayaan_Alam = kekayaan_alam.ID");
?>

<html>
<head>    
    <title>Daftar Danau</title>
</head>

<body>
<a href="add-danau.php">Tambah Danau</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama</th> <th>Luas</th> <th>Letak_Astronomis</th> <th>Jenis_Danau</th> <th>Kedalaman</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Luas']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Jenis_Danau']."</td>";
        echo "<td>".$data['Kedalaman']."</td>";
        echo "<td><a href='edit-danau.php?ID=$data[ID]'>Edit</a> | <a href='delete-danau.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>