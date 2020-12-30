<html>
<head>
    <title>Tambah Etnis</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-etnis.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama_Etnis</td>
                <td><input type="text" name="Nama_Etnis"></td>
            </tr>
            <tr> 
                <td>Wilayah_Asli</td>
                <td><input type="text" name="Wilayah_Asli"></td>
            </tr>
            <tr> 
                <td>Jumlah_Populasi</td>
                <td><input type="text" name="Jumlah_Populasi"></td>
            </tr>
            <tr> 
                <td>Bahasa</td>
                <td><input type="text" name="Bahasa"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $ID = $_POST['ID'];
        $Nama_Etnis = $_POST['Nama_Etnis'];
        $Wilayah_Asli = $_POST['Wilayah_Asli'];
        $Jumlah_Populasi = $_POST['Jumlah_Populasi'];
        $Bahasa = $_POST['Bahasa'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO etnis VALUES('$ID','$Nama_Etnis','$Wilayah_Asli','$Jumlah_Populasi','$Bahasa')");

        echo "Etnis berhasil ditambahkan. <a href='/GP/etnis.php'>Back</a>";
    }
    ?>
</body>
</html>