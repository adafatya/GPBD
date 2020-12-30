<html>
<head>
    <title>Tambah Gunung</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-gunung.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Luas</td>
                <td><input type="text" name="Luas"></td>
            </tr>
            <tr> 
                <td>Letak_Astronomis</td>
                <td><input type="text" name="Letak_Astronomis"></td>
            </tr>
            <tr> 
                <td>Jenis_Gunung</td>
                <td><input type="text" name="Jenis_Gunung"></td>
            </tr>
            <tr> 
                <td>Tinggi_Puncak</td>
                <td><input type="text" name="Tinggi_Puncak"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Luas = $_POST['Luas'];
        $Letak_Astronomis = $_POST['Letak_Astronomis'];
        $Tinggi_Puncak = $_POST['Tinggi_Puncak'];
        $Jenis_Gunung = $_POST['Jenis_Gunung'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID', '$Nama', '$Luas', '$Letak_Astronomis')");
        $result = mysqli_query($mysqli, "INSERT INTO gunung VALUES('$ID','$Jenis_Gunung','$Tinggi_Puncak')");

        // Show message when user added
        echo "Gunung berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>