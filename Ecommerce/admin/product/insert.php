<?php

include 'config.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];
    $image_loc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $product_category = $_POST['pages'];

 $image_des ="Uploadimage/".$image_name;

move_uploaded_file( $image_loc, "Uploadimage/".$image_name);

// insert product 
mysqli_query($con, "INSERT INTO `tblproduct`( `pname`, `pprice`, `pimage`, `pcategory`) VALUES ('$product_name','$product_price','$image_des','$product_category')");
}

?>
