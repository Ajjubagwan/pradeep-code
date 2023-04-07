<?php
// $server="localhost";
// $username="root";
// $password="";
// $database="chetu_php";
// $conn=mysqli_connect($server,$username,$password,$database);
$conn = mysqli_connect('localhost', 'root', '', 'chetu_php');
if($conn)
{
    echo "Connected";
}

?>