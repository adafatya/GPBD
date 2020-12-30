<html>
<head>
    <title>Tambah Pulau Berdekatan dengan Perairan</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-pulau-perairan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID_Pulau</td>
                <td><input type="text" name="ID_Pulau"></td>
            </tr>
            <tr> 
                <td>ID_Perairan</td>
                <td><input type="text" name="ID_Perairan"></td>
            </tr>
            <tr> 
                <td>Jarak</td>
                <td><input type="text" name="Jarak"></td>
            </tr>
            <tr> 
                <td>Di_Bagian</td>
                <td><input type="text" name="Di_Bagian"></td>
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
        $ID_Pulau = $_POST['ID_Pulau'];
        $Jarak = $_POST['Jarak'];
        $ID_Perairan = $_POST['ID_Perairan'];
        $Di_Bagian = $_POST['Di_Bagian'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID_Pulau','$ID_Perairan','$Jarak','$Di_Bagian')");

        // Show message when user added
        echo "Hubungan Pulau yang berdekatan dengan Perairan berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>