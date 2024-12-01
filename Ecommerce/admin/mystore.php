<html>
    <head>
        <title>Ecomerce</title>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <?php

    session_start();
    if( !$_SESSION['admin'] ){
      header("location:form/login.php");
    }

    ?>
    <body>
    <nav class="navbar bg-white">
  <div class="container-fluid text-warning">
    <a class="navbar-brand text-warning"><img src="../user/logo.png" width="200px" height="90px"></a>
    
<span>
<i class="fa-solid fa-user"></i>
Hello,<?php echo $_SESSION['admin']; ?> | 
<i class="fa-solid fa-right-from-bracket"></i>
<a href="form/logout.php" class="text-decoration-none text-warning">Logout</a> |
<a href="form/login1.php"class="text-decoration-none text-warning">Userpanel</a>
</span>

  </div>
</nav>


<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
  <a href="product/index.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Add post</a>
  <a href="user.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>

</div>


    </body>
</html>