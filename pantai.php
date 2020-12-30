<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pantai JOIN kekayaan_alam WHERE pantai.Id_Kekayaan_Alam = kekayaan_alam.ID");
?>

<html>
<head>    
    <title>Daftar Pantai</title>
</head>

<body>
<a href="add-pantai.php">Tambah Pantai</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama</th> <th>Luas</th> <th>Letak_Astronomis</th> <th>Jenis_Pasir</th> <th>Jenis_Pantai</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Luas']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Jenis_Pasir']."</td>";
        echo "<td>".$data['Jenis_Pantai']."</td>";
        echo "<td><a href='edit-pantai.php?ID=$data[ID]'>Edit</a> | <a href='delete-pantai.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>