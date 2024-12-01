<html>
    <head>
        <title>register form</title>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- fontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                    <p class="text-warning text-center fs-3 fw-bold my-3">User Login</p>
                    
                    <form action="Login1.php" method="POST">

                        <div class="mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="name" placeholder="Enter User Name " class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Enter password " class="form-control">
                        </div>

                        
                        <div class="mb-3">
                            <button class="w-100 bg-danger fs-4 text-white">Login</button>
                        </div>

                        <div class="mb-3">
                            <button name="submit" class="w-100 bg-warning fs-4 text-white"><a href="register.php"class="text-decoration-none text-white">Register</a></button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </body>
</html>