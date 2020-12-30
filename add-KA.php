<html>
<head>
    <title>Tambah Kekayaan Alam</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-KA.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama Kekayaan Alam</td>
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
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $ID = $_POST['ID'];
        $Luas = $_POST['Luas'];
        $Nama = $_POST['Nama'];
        $Letak_Astronomis = $_POST['Letak_Astronomis'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kekayaan_alam VALUES('$ID','$Nama','$Luas','$Letak_Astronomis')");

        // Show message when user added
        echo "Kekayaan Alam berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>