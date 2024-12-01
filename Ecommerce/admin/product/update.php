<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
            <?php
            // Check if ID is set in the URL
            if(isset($_GET['ID'])) {
                $id = $_GET['ID'];
                include 'config.php';
                $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE ID=$id");
                $data = mysqli_fetch_array($Record);
                ?>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Update Products Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php echo $data['pname'] ?? '' ?>" name="pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['pprice'] ?? '' ?>" name="pprice" class="form-control" placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="pimage" class="form-control">
                        <img src="<?php echo $data['pimage'] ?? '' ?>" alt="" style="height:100px;">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page category:</label>
                        <select class="form-select" name="pages">
                            <option value="Home" <?php if(isset($data['pages']) && $data['pages'] == 'Home') echo 'selected' ?>>Home</option>
                            <option value="Male" <?php if(isset($data['pages']) && $data['pages'] == 'Laptop') echo 'selected' ?>>Male</option>
                            <option value="Female" <?php if(isset($data['pages']) && $data['pages'] == 'Mobile') echo 'selected' ?>>Female</option>
                            <option value="Baby" <?php if(isset($data['pages']) && $data['pages'] == 'Bag') echo 'selected' ?>>Baby</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['ID'] ?? '' ?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
                <?php
            } else {
                echo "ID is not provided.";
            }
            ?>
        </div>
    </div>
</div>

<!-- php update code -->
<?php
if(isset($_POST['update'])){
    $id=$_POST['id'] ?? '';
    $product_name = $_POST['pname'] ?? '';
    $product_price = $_POST['pprice'] ?? '';
    $product_image = $_FILES['pimage'] ?? '';
    $image_loc = $_FILES['pimage']['tmp_name'] ?? '';
    $image_name = $_FILES['pimage']['name'] ?? '';
    $product_category = $_POST['pages'] ?? '';

    if(!empty($id) && !empty($product_name) && !empty($product_price) && !empty($product_category)) {
        $image_des = "Uploadimage/".$image_name;
        move_uploaded_file($image_loc, "Uploadimage/".$image_name);

        include 'config.php';
        mysqli_query($con, "UPDATE `tblproduct` SET `pname`='$product_name',`pprice`='$product_price',`pimage`='$image_des',`pcategory`='$product_category' WHERE ID = $id");
        header("location:index.php");
    } else {
        echo "Please fill all the required fields.";
    }
}
?>


</body>
</html>
