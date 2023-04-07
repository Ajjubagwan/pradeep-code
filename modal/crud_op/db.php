<?php
$server="localhost";
$username="root";
$password="";
$database="chetu_php";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo "Connected";
}

?>