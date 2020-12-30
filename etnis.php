<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM etnis ORDER BY Nama");
?>

<html>
<head>    
    <title>Daftar Etnis</title>
</head>

<body>
<a href="add-etnis.php">Tambah Etnis</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama_Etnis</th> <th>Wilayah_Asli</th> <th>Jumlah_Populasi</th> <th>Bahasa</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Wilayah_Asli']."</td>";    
        echo "<td>".$data['Jumlah_Populasi']."</td>";
        echo "<td>".$data['Bahasa']."</td>";
        echo "<td><a href='edit-etnis.php?ID=$data[ID]'>Edit</a> | <a href='delete-etnis.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>