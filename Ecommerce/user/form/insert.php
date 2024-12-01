<?php

$con = mysqli_connect('localhost', 'root', '', 'ecommerce');

if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['number'];
    $Password=$_POST['password'];

    

   

    $Dup_username = mysqli_query($con, "SELECT * FROM `tbluser` WHERE Username ='$Name'");
    $Dup_Email = mysqli_query($con, "SELECT * FROM `tbluser` WHERE Email ='$Email'");
   
    if(mysqli_num_rows($Dup_Email)){
    echo "
     <script>
      alert('This email is already taken');
      window.location.href='register.php';
     </script>



";
    

}

if(mysqli_num_rows($Dup_username)){
    echo "
     <script>
      alert('This username is already taken');
      window.location.href='register.php';
     </script>

";

}
else
{
    mysqli_query($con, "INSERT INTO `tbluser`( `Username`, `Email`, `Number`, `Password`) 
    VALUES ('$Name','$Email','$Number','$Password')");

echo "
<script>
 alert('Register sucessfully');
 window.location.href='login.php';
</script>

";
}
}
?>