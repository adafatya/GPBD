<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM wilayah_sda");
?>

<html>
<head>    
    <title>Daftar Wilayah Administratif yang Mempunyai Sumber Daya Alam</title>
</head>

<body>
<a href="add-w_sda.php">Tambah Wilayah Administratif yang Mempunyai Sumber Daya Alam</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Id_Wilayah</th> <th>Id_SDA</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['Id_Wilayah']."</td>";
        echo "<td>".$data['Id_SDA']."</td>";
        echo "<td><a href='edit-w_sda.php?Id_Wilayah=$data[Id_Wilayah]&Id_SDA=$data[Id_SDA]'>Edit</a> | <a href='delete-w_sda.php?Id_Wilayah=$data[Id_Wilayah]&Id_SDA=$data[Id_SDA]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>