<html>
    <head>
        <title>header for user</title>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    </head>
<body>
<?php
session_start();

$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>



<nav class="navbar bg-white">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pd-2">
        <img src="1.png" width="200px" height="100px"></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-sharp fa-solid fa-house-chimney"></i> Home</a>
    <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i> Card (<?php  echo $count ?>) |</a>
    <span class="text-warning pe-2">
    <i class="fa-solid fa-user-shield"></i> Hello, |
<?php
if(isset($_SESSION['user']))
{
 echo $_SESSION['user'];
 echo "
 <a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>  Logout</a> |
";
}
else{
    echo " <a href='form/login.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i> Login</a> |

";
}
?>

    
    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>

    </span>
</nav>
</div>






<div class="bg-danger font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="Male.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Male</a></li>
        <li><a href="Female.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Female</a></li>
        <li><a href="baby.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Baby</a></li>


       
    </ul>

</div>


 



</body>
</html>
