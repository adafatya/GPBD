<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pulau ORDER BY Nama");
?>

<html>
<head>    
    <title>Daftar Pulau</title>
</head>

<body>
<a href="add-pulau.php">Tambah Pulau</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama_Pulau</th> <th>Luas</th> <th>Letak_Geografis</th> <th>Letak_Astronomis</th> <th>Jumlah_Penduduk</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Luas']."</td>";    
        echo "<td>".$data['Letak_Geografis']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Jumlah_Penduduk']."</td>";
        echo "<td><a href='edit-pulau.php?ID=$data[ID]'>Edit</a> | <a href='delete-pulau.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>