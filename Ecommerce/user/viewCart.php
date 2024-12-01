


<html>
    <head>
        <title>viewcart</title>

    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center bg-light mb-5">
                    <h1 class="text-warning">My Cart</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-md-6 col-lg-9">
                    <table class="table table-bordered text-center">
                        <thead class="bg-danger text-white fs-5">
                            <th>S.No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                           
                        </thead>
                        <tbody>





     <?php
// session_start(); 
$ptotal = 0;
$total = 0;
$i = 0;

if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $key => $value) {
        // Cast values to numbers to ensure they are numeric
        $productPrice = (float)$value['productPrice'];
        $productQuantity = (int)$value['productQuantity'];

        // Calculate product total
        $ptotal = $productPrice * $productQuantity;
        
        // Accumulate total
        $total += $ptotal;
        
        $i = $key + 1;

        echo "
        <tr>
            <form action='insertcart.php' method='POST'>
                <td>$i</td>
                <td><input type='hidden' name='pname' value='$value[productName]'>$value[productName]</td>
                <td><input type='hidden' name='pprice' value='$value[productPrice]'>$value[productPrice]</td>
                <td><input type='text' name='pquantity' value='$value[productQuantity]'></td>
                <td>$ptotal</td>
                <td><button type='submit' name='update' class='btn btn-warning'>Update</button></td>
                <td><button type='submit' name='remove' class='btn btn-danger'>Delete</button></td>
                <td><input type='hidden' name='item' value='$value[productName]'></td>
            </form>
        </tr>";
    }
}
?>

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3 text-center">
                    <h3>Total</h3>
                    <h1 class="bg-danger text-white">
                        <?php
                        echo number_format($total);

                        ?>
                    </h1>
                    <div>
    <h3>Pay with</h3>
    <ul>
       
            <a href="pay.php">
            <img src="khalti.png" alt="Khalti" style="width: 150px; height: 50px;">
            </a>
        
    </ul>
</div>




                    
                </div>



            </div>
        </div>
      
    


    </body>
</html>