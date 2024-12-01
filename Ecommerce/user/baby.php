<html>
    <head>
        <title>homepage</title>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php

    include 'header.php'
    ?>
    
    </head>
    <body>
        <div class="container-fluid">
            <div class="colmd-12">
            <div class="row">
                
            
<h1 class="text-warning font-monospace text-center my-3">Baby</h1>
<?php
include 'config.php';
$Record = mysqli_query($con, "select * from tblproduct");
 while($row=mysqli_fetch_array($Record)){

$check_page =$row['pcategory'];
if($check_page === 'Baby'){



 echo "
 
 <div class='col-md-6 col-lg-4 m-auto mb-3'>
 <form action = 'insertcart.php' method ='POST'>
  <div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[pimage]' class='card-img-top'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[pname]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>";?>Rs. <?php echo  number_format($row['pprice'])?><?php echo" </p>
    <input type='hidden' name = 'pname' value = '$row[pname]'>
    <input type='hidden' name = 'pprice' value = '$row[pprice]'>
    <input type='number' name='pquantity' value=' min='1' max ='20'' placeholder='Quantity'><br><br>
    <input type='submit' name= 'addCart' class='btn btn-warning text-white w-100' value='Add To Cart'>
   
    
  </div>
</div>
</form>
</div>


";
 }
}
?>
               </div>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </body>
</html>