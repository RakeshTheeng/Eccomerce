

<?php
session_start();
if(isset($_SESSION['user'])){

// Check if session exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(isset($_POST['addCart'])){
    $product_name = htmlspecialchars($_POST['pname']);
    $product_price = htmlspecialchars($_POST['pprice']);
    $product_quantity = htmlspecialchars($_POST['pquantity']);
   

    $ptotal = $product_price * $product_quantity;
        
   
    mysqli_query($con, "INSERT INTO `mycart`(`p_name`, `p_price`, `p_quantity`, `p_totalprice`) 
    VALUES ('$product_name','$product_price ',' $product_quantity', '$ptotal')");

}

// Add product to cart
if(isset($_POST['addCart'])){
    $product_name = htmlspecialchars($_POST['pname']);
    $product_price = htmlspecialchars($_POST['pprice']);
    $product_quantity = htmlspecialchars($_POST['pquantity']);

    $check_product = array_column($_SESSION['cart'], 'productName');

    if(in_array($product_name, $check_product)){
        echo "<script>alert('Product already added');</script>";
        exit;
    } else {
        $_SESSION['cart'][] = array(
            'productName' => $product_name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity
        );
        header("location:viewCart.php");
        exit;
    }
}

// Remove product from cart
if(isset($_POST['remove'])){
    $item_to_remove = htmlspecialchars($_POST['item']);
    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $item_to_remove){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:viewCart.php');
            exit;
        }
    }
}


if(isset($_POST['update'])){
    $item_to_update = htmlspecialchars($_POST['item']);
    $product_name = htmlspecialchars($_POST['pname']);
    $product_price = htmlspecialchars($_POST['pprice']);
    $product_quantity = htmlspecialchars($_POST['pquantity']);

    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $item_to_update){
            $_SESSION['cart'][$key] = array(
                'productName' => $product_name,
                'productPrice' => $product_price,
                'productQuantity' => $product_quantity
            );
            header("location:viewCart.php");
            exit; // Exit after redirection
        }
    }
}
}
else{
    header("location:form/login.php");
}





?>







