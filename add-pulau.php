<html>
<head>
    <title>Tambah Pulau</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-pulau.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama Pulau</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Luas</td>
                <td><input type="text" name="Luas"></td>
            </tr>
            <tr> 
                <td>Letak_Geografis</td>
                <td><input type="text" name="Letak_Geografis"></td>
            </tr>
            <tr> 
                <td>Letak_Astronomis</td>
                <td><input type="text" name="Letak_Astronomis"></td>
            </tr>
            <tr> 
                <td>Jumlah_Penduduk</td>
                <td><input type="text" name="Jumlah_Penduduk"></td>
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
        $Letak_Geografis = $_POST['Letak_Geografis'];
        $Letak_Astronomis = $_POST['Letak_Astronomis'];
        $Jumlah_Penduduk = $_POST['Jumlah_Penduduk'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pulau VALUES('$ID','$Luas','$Nama','$Letak_Geografis','$Letak_Astronomis','$Jumlah_Penduduk')");

        // Show message when user added
        echo "Pulau berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>