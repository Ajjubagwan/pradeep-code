<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .img{
            height: 80px;
            width: 80px;
        }
    </style>
  </head>
  <body class="bg-dark">
   
    <div class="comtainer">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-5">
                   
                    <table class="table table-dark">
                    <tr>
                        <button> 
                        <a class="btn btn-success float-start" href="index.php">Add Data</a>&nbsp;
                        <a class="btn btn-danger float-end" href="logout.php">Log out</a>
                        </button>
                    </tr>
                    
                    <h3 class="text-center bg-dark text-white">Display Data </h3>
                        <tr>
                            <td>Id</td>
                            <td>Images</td>
                            <td>Name</td>
                            <td>Mobile</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>C Password</td>
                            <td>Action</td>
                        </tr>
                        <?php
                        session_start();
                        include "db.php";
                        if(!isset($_SESSION['LOGIN']))
                        {
                            header('Location: login.php');
                            die();
                        }
                        $query="SELECT * FROM register";
                        $result=mysqli_query($conn,$query);
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $img=$row['image'];
                            $name=$row['name'];
                            $mobile=$row['mobile'];
                            $email=$row['email'];
                            $password=$row['password'];
                            $c_password=$row['c_password'];?>

                            <tr>
                                <td><?php echo $id?></td>
                                <td><img class="img" src="./image/<?php echo $img;?>"></td>
                                <td><?php echo $name?></td>
                                <td><?php echo $mobile?></td>
                                <td><?php echo $email?></td>
                                <td><?php echo $password?></td>
                                <td><?php echo $c_password?></td>
                                <td>
                                    <!-- <a class="btn btn-success" href="index.php">Add Data</a>  -->
                                    <a class="btn btn-primary" href="update.php?id=<?php echo $id;?>">Update</a> 
                                    <a class="btn btn-danger" href="delete.php? id=<?php echo $id;?>">Delete</a>
                                    
                                </td>
                                
                            </tr>

                        <?php }

                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>