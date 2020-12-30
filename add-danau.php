<html>
<head>
    <title>Tambah Danau</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-danau.php" method="post" name="form1">
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
                <td>Jenis_Danau</td>
                <td><input type="text" name="Jenis_Danau"></td>
            </tr>
            <tr> 
                <td>Kedalaman</td>
                <td><input type="text" name="Kedalaman"></td>
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
        $Kedalaman = $_POST['Kedalaman'];
        $Jenis_Danau = $_POST['Jenis_Danau'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID', '$Nama', '$Luas', '$Letak_Astronomis')");
        $result = mysqli_query($mysqli, "INSERT INTO danau VALUES('$ID','$Jenis_Danau','$Kedalaman')");

        // Show message when user added
        echo "Danau berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>