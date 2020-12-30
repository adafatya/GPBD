<html>
<head>
    <title>Tambah Perairan</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-perairan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama Perairan</td>
                <td><input type="text" name="Nama_Perairan"></td>
            </tr>
            <tr> 
                <td>Jenis_Perairan</td>
                <td><input type="text" name="Jenis_Perairan"></td>
            </tr>
            <tr> 
                <td>Kedalaman</td>
                <td><input type="text" name="Kedalaman"></td>
            </tr>
            <tr> 
                <td>Letak_Astronomis</td>
                <td><input type="text" name="Letak_Astronomis"></td>
            </tr>
            <tr> 
                <td>Luas</td>
                <td><input type="text" name="Luas"></td>
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
        $Jenis_Perairan = $_POST['Jenis_Perairan'];
        $Nama_Perairan = $_POST['Nama_Perairan'];
        $Kedalaman = $_POST['Kedalaman'];
        $Letak_Astronomis = $_POST['Letak_Astronomis'];
        $Luas = $_POST['Luas'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO perairan VALUES('$ID','$Nama_Perairan','$Jenis_Perairan','$Kedalaman', '$Letak_Astronomis', '$Luas')");

        // Show message when user added
        echo "Perairan berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>