<?php
include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];

if($email!="" && $password!="" && $c_password!=""){

    $insert="INSERT INTO user(email,password,c_password) VALUES('$email','$password','$c_password')";
    $result=mysqli_query($conn,$insert);
    if($result)
    {
        echo "Data Inserted";
    }

}
else
{
    ?>
    <script>alert("Plese! fill out input field");</script>
    <?php

}

?>