<html>

<head>
    <title>products-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">


                <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Products Details:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="pprice" class="form-control" placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="pimage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page category:</label>
                        <select class="form-select" name="pages">
                      
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Baby">Baby</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
            </div>
        </div>
    </div>

    </form>
    
    <!-- fetch data -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">



                <table class="table border border-warning table-striped-columns border my-5">

                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>

                    </thead>
                   <tbody class="text-center"
                      <?php
                    include 'config.php';


                    $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
                    while ($row = mysqli_fetch_array($Record))
                        echo "
                                <tr>
                               <td>$row[ID]</td>
                               <td>$row[pname]</td>
                               <td>$row[pprice]</td>
                               <td><img src='$row[pimage]' height='90px' width='200px'></td>
                               <td>$row[pcategory]</td>
                               <td><a href='delete.php? ID=$row[ID]' class ='btn btn-danger'>Delete</a></td>
                               <td><a href='update.php? ID=$row[ID]' class ='btn btn-warning'>Update</a></td>
       
                                   </tr> 
                                         ";
                       ?>
                   </tbody>

                </table>
            </div>

        </div>
    </div>
</body>

</html>