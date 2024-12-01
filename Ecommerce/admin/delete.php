<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
$Id=$_GET['ID'];
mysqli_query($con, "DELETE FROM `tbluser` WHERE Id =$Id ");
header("location:user.php");


?>