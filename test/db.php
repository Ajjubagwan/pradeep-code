<?php

$conn=mysqli_connect("localhost","root","","chetu_php");
if($conn)
{
    ?>
    <script>alert("Database Connected");</script>
    <?php
}

?>