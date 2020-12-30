<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM perairan ORDER BY Nama");
?>

<html>
<head>    
    <title>Daftar Perairan</title>
</head>

<body>
<a href="add-perairan.php">Tambah Perairan</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th> <th>Nama_Perairan</th> <th>Jenis_Perairan</th> <th>Kedalaman</th> <th>Letak_Astronomis</th> <th>Luas</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID']."</td>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Jenis']."</td>";    
        echo "<td>".$data['Kedalaman']."</td>";
        echo "<td>".$data['Letak_Astronomis']."</td>";
        echo "<td>".$data['Luas']."</td>";
        echo "<td><a href='edit-perairan.php?ID=$data[ID]'>Edit</a> | <a href='delete-perairan.php?ID=$data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>