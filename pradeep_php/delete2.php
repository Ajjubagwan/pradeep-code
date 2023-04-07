<?php   
include "db.php";
$id=$_GET['id'];
$delete="DELETE FROM img_folder WHERE id='$id'";
$query=mysqli_query($conn,$delete);
if($query)
{
    ?>
    <script>
        alert("Image Deleted");
        window.location.href="http://localhost/pradeep_php/view.php";
    </script>
    <?php
}
?>