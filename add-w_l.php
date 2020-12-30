<html>
<head>
    <title>Tambah Wlayah Administratif Mempunyai Land</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="w_l.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID_Wilayah</td>
                <td><input type="text" name="ID_Wilayah"></td>
            </tr>
            <tr> 
                <td>Land_ID</td>
                <td><input type="text" name="Land_ID"></td>
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
        $Land_ID = $_POST['Land_ID'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID_Wilayah','$Land_ID')");

        // Show message when user added
        echo "Hubungan Wilayah yang Mempunyai Land berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>