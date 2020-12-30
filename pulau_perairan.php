<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pulau_perairan");
?>

<html>
<head>    
    <title>Daftar Pulau yang Berdekatan dengan Perairan</title>
</head>

<body>
<a href="add-pulau_perairan.php">Tambah Pulau yang Berdekatan dengan Perairan</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID_Pulau</th> <th>ID_Perairan</th> <th>Jarak</th> <th>Di_Bagian</th> <th>Update</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['ID_Pulau']."</td>";
        echo "<td>".$data['ID_Perairan']."</td>";
        echo "<td>".$data['Jarak']."</td>";    
        echo "<td>".$data['Di_Bagian']."</td>";
        echo "<td><a href='edit-pulau_perairan.php?ID_Pulau=$data[ID_Pulau]&$ID_Perairan=$data[ID_Perairan]'>Edit</a> | <a href='delete-pulau_perairan.php?ID_Pulau=$data[ID_Pulau]&ID_Perairan=$data[ID_Perairan]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="/GP">Back</a>
</body>
</html>