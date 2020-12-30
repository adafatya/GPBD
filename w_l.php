<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM wilayah_land");
?>

<html>
<head>    
    <title>Daftar Wilayah Administratif yang Mempunyai Land</title>
</head>

<body>
<a href="add-w_l.php">Tambah Wilayah Administratif yang Mempunyai Land</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Id_Wilayah</th> <th>Land_Id</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['Id_Wilayah']."</td>";
        echo "<td>".$data['Land_Id']."</td>";
        echo "<td><a href='edit-w_l.php?Id_Wilayah=$data[Id_Wilayah]&Land_Id=$data[Land_Id]'>Edit</a> | <a href='delete-w_l.php?Id_Wilayah=$data[Id_Wilayah]Land_Id=$data[Land_Id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>