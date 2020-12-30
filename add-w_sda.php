<html>
<head>
    <title>Tambah Wilayah Administratif yang Mempunyai SDA</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="w_sda.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID_Wilayah</td>
                <td><input type="text" name="ID_Wilayah"></td>
            </tr>
            <tr> 
                <td>ID_SDA</td>
                <td><input type="text" name="ID_SDA"></td>
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
        $ID_Wilayah = $_POST['ID_Wilayah'];
        $ID_SDA = $_POST['ID_SDA'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID_Wilayah','$ID_SDA')");

        // Show message when user added
        echo "Hubungan Wilayah yang Mempunyai Sumber Daya Alam berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>