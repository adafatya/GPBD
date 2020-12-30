<html>
<head>
    <title>Tambah Penduduk</title>
</head>

<body>
    <a href="/GP">Go to Home</a>
    <br/><br/>

    <form action="add-penduduk.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NIK</td>
                <td><input type="text" name="NIK"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Jenis_Kelamin</td>
                <td><input type="text" name="Jenis_Kelamin"></td>
            </tr>
            <tr> 
                <td>Tempat_Lahir</td>
                <td><input type="text" name="Tempat_Lahir"></td>
            </tr>
            <tr> 
                <td>Tanggal_Lahir</td>
                <td><input type="date" name="Tanggal_Lahir"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="Agama"></td>
            </tr>
            <tr> 
                <td>Pendidikan_Terakhir</td>
                <td><input type="text" name="Pendidikan_Terakhir"></td>
            </tr>
            <tr> 
                <td>Pekerjaan</td>
                <td><input type="text" name="Pekerjaan"></td>
            </tr>
            <tr> 
                <td>Penghasilan</td>
                <td><input type="text" name="Penghasilan"></td>
            </tr>
            <tr> 
                <td>Id_Wilayah</td>
                <td><input type="text" name="Id_Wilayah"></td>
            </tr>
            <tr> 
                <td>Id_Pulau</td>
                <td><input type="text" name="Id_Pulau"></td>
            </tr>
            <tr> 
                <td>Id_Etnis</td>
                <td><input type="text" name="Id_Etnis"></td>
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
        $NIK = $_POST['NIK'];
        $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
        $Nama = $_POST['Nama'];
        $Tempat_Lahir = $_POST['Tempat_Lahir'];
        $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
        $Agama = $_POST['Agama'];
        $Pendidikan_Terakhir = $_POST['Pendidikan_Terakhir'];
        $Pekerjaan = $_POST['Pekerjaan'];
        $Penghasilan = $_POST['Penghasilan'];
        $Id_Wilayah = $_POST['Id_Wilayah'];
        $Id_Pulau = $_POST['Id_Pulau'];
        $Id_Etnis = $_POST['Id_Etnis'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penduduk VALUES('$NIK','$Nama','$Jenis_Kelamin','$Tempat_Lahir', '$Tanggal_Lahir', '$Agama', '$Pendidikan_Terakhir', '$Pekerjaan', '$Penghasilan', '$Id_Wilayah', 'Id_Pulau', 'Id_Etnis')");

        // Show message when user added
        echo "Penduduk berhasil ditambahkan. <a href='/GP'>Back</a>";
    }
    ?>
</body>
</html>