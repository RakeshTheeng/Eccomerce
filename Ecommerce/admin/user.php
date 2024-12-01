<html>
    <head>
        <title>User list</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>
      
    <?php
include'mystore.php';
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
$Record=mysqli_query($con, "SELECT * FROM `tbluser`");
$row_count = mysqli_num_rows($Record);

    ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">


    <table class="table table-warning text-white table-bordered">
        <thead class="text-center">
            <th>S.N</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
            

           
        </thead>
        <tbody class="text-center text-danger">
            <?php
         $i=0;
         while(   $row = mysqli_fetch_array($Record)){
         echo "   <tr>
         
            <td>"; ?> <?php echo ++$i; ?> <?php echo "</td>
            <td>$row[Username]</td>
            <td>$row[Email]</td>
            <td>$row[Number]</td>
            <td><a href='delete.php? ID=$row[Id]' class = 'btn btn-outline-danger'> Delete</a></td>
        </tr>
        ";

         }

            
            ?>



        </tbody>
    </table>
    </div>
   
<div class="col-md-2 pr-5 text-center">
    <h3 class="text-danger">Total</h3>
    <h1 class="bg-danger text-white"><?php echo $row_count; ?></h1>
</div>
</div>
</div>
    </body>
</html>



