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
      <li class="log"><a style="text-decoration: none;" href="#" data-toggle="modal" data-target="#myModal">Register</a></li>
    </ul>
  </nav>
    
  
  <div class="container2">
    <div class="modal fade" id="myModalLog" role="dialog">
      
      <div class="modal-dialog">
      
        <div class="box">
          <div class="modal-content" id="m_id">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login Here</h4>
            </div>
            <div class="modal-body">
              
              <div class="reg">
                <label>Email:</label>
                <input type="email" name="email" placeholder="abc@gmail.com" id="log_email" style="border-radius: 4px; border: none;" required>
              </div>
              <div class="reg">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter Password" id="log_pass" style="border-radius: 4px; border: none;" required>
              </div>
             
            </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-success" data-dismiss="modal">Login</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>  
  

          </form>
        </div> 
      </div>
    </div>
  </div>
  
  
</body>
</html>
