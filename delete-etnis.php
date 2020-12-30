<?php
include_once("config.php");

$ID = $_GET['ID'];

$result = mysqli_query($mysqli, "DELETE FROM etnis WHERE ID='$ID'");

header("Location:etnis.php");
?>