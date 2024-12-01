<?php
include 'config.php';
$ID=$_GET['ID'];
mysqli_query($con, "DELETE FROM `tblproduct` WHERE ID =$ID ");
header("location:index.php");


?>