<?php

include "db.php";
$id=$_GET['id'];

$delete="DELETE FROM register WHERE id='$id'";
$result=mysqli_query($conn,$delete);
if($result)
{
    ?>
    <script>
        alert("Data Deleted Successfully");
        window.location.href="http://localhost/pradeep_php/display.php";
    </script>
    <?php
}

?>