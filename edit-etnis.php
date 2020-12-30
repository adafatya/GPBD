<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $ID = $_POST['ID'];
    $Nama = $_POST['Nama'];
    $Wilayah_Asli = $_POST['Wilayah_Asli'];
    $Jumlah_Populasi = $_POST['Jumlah_Populasi'];
    $Bahasa = $_POST['Bahasa'];

    $result = mysqli_query($mysqli, "UPDATE etnis SET Nama='$Nama',Wilayah_Asli='$Wilayah_Asli',Jumlah_Populasi='$Jumlah_Populasi',Bahasa='$Bahasa' WHERE ID='$ID'");
    header("Location:etnis.php");
}
?>
<?php
$ID = $_GET['ID'];

$result = mysqli_query($mysqli, "SELECT * FROM etnis WHERE ID='$ID'");

while($etnis_data = mysqli_fetch_array($result))
{
    $Nama = $etnis_data['Nama'];
    $Wilayah_Asli = $etnis_data['Wilayah_Asli'];
    $Jumlah_Populasi = $etnis_data['Jumlah_Populasi'];
    $Bahasa = $etnis_data['Bahasa'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="/GP">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit-etnis.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Wilayah_Asli</td>
                <td><input type="text" name="Wilayah_Asli" value=<?php echo $Wilayah_Asli;?>></td>
            </tr>
            <tr> 
                <td>Jumlah_Populasi</td>
                <td><input type="text" name="Jumlah_Populasi" value=<?php echo $Jumlah_Populasi;?>></td>
            </tr>
            <tr> 
                <td>Bahasa</td>
                <td><input type="text" name="Bahasa" value=<?php echo $Bahasa;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>