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
  
    <style>
        .container{
            height: 300px;
            width: 40%;
            background-color: aqua;margin-top: 100px;
            border: 2px solid blueviolet;
            
        }
        .abc{
            height: 250px;
            width: 60%;
            border: 2px black;
            background-color: ;
            margin-left: 100px;
        }

        .abc h3{
            text-align: center;
            color: blue;
            font-family: sans-serif;
            font-weight: 600;
        }
        .box input{
            width: 100%;
        }
        .btn{
            margin-bottom: 10px;
            background-color: greenyellow;
            border: 1px solid black;
            font-weight: 600;
            
        }


    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="test.php">
            <div class="abc">
                <h3>Login Page</h3>
                <div class="box" >
                    <label>Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="box">
                    <label>Password</label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="password">
                </div>
                <div class="box">
                    <label>Confirm Password</label>
                    <input type="text" name="c_password" id="c_password" class="form-control" placeholder="confirm password" ><br>
                </div>
                <input type="submit" name="submit" value="Submit" onclick="myUser()" class="btn">
            </div>
        </form>
    </div>


</body>
</html>

<script>
    function myUser(){
        
        var email=$("#email").val();
        var password=$("#password").val();
        var c_password=$("#c_password").val();

        $.ajax({

            url: "userAdd.php",
            type: 'post',
            data: {email : email,
                password : password,
                c_password : c_password
            },
            success: function(data){
                
            },

        });

    }
    


</script>