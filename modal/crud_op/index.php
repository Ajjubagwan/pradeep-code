<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modal</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="modal.css">

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    
</head>
<body>
  <nav>
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About Us</a></li>
      <li class="log"><a style="text-decoration: none;" href="#" data-toggle="modal" data-target="#myModalLog">Login</a></li>
      <li class="log"><a style="text-decoration: none;" href="loin.php" data-toggle="modal" data-target="#myModal">Register</a></li>
    </ul>
  </nav>
    
  <!-- ...................Modal.....................-->
  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="box">
          <div class="modal-content" id="m_id">
          <form method="POST">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"></button>
              <h4 class="modal-title">Register Here</h4>
            </div>
            <div class="modal-body">
              <div class="reg">
                <label>Name:</label>
                <input type="text" name="username" placeholder="Enter Your Name" id="u_name" required>
              </div>
              <div class="reg">
                <label>Mobile:</label>
                <input type="tel" name="mobile" placeholder="000-0000-000" id="t_num" required>
              </div>
              <div class="reg">
                <label>Email:</label>
                <input type="email" name="email" placeholder="abc@gmail.com" id="e_mail" required>
              </div>
              <div class="reg">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter Password" id="pass" required>
              </div>
              <div class="reg">
                <label>Confirm Password:</label>
                <input type="password" name="c_password" placeholder="Confirm Password" id="c_pass" required>
              </div>
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
        </div>  
    
    </div> 
  </div>
</div>
</div>
  
</body>
</html>


<?php
include "db.php";

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $c_password=$_POST['c_password'];

  $insert="INSERT INTO resister('name',mobile,'email','password','c_password') VALUES('$name',$mobile,'$email','$password','$c_password')";
  $query=mysqli_query($conn,$insert);
  if($query)
  {
    ?>
    <script>
      alert("You have registered Successfully");
      window.open("http://localhost/modal/modal.php");
    </script>
    <?php
  }
}

?>