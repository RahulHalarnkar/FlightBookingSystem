

<?php
require_once 'connection.php';
require 'session.php';

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
   // username and password sent from form

   $username = $_POST['username'];
   $password = $_POST['password'];

   $flag=0;
   $sql = "SELECT * FROM user WHERE Username = '$username' and user_pwd = '$password'";
   $result = mysqli_query($con,$sql);
   if(!$result){
        $error = "Some problem occured";
        echo $error;
        $flag=0;
   }
   $flag=1;
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //$active = $row['active'];

   $count = mysqli_num_rows($result);

   // If result matched $myusername and $mypassword, table row must be 1 row

   if($count == 1) {
    
      $_SESSION["username"]=$ro['username'];
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['flag']=$flag;


      header("location: main.html");
   }
   else {
      $error = "Your Login Name or Password is invalid <br>";
      echo $error;
   }
}

?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="style.css">
<style>
	body {
  	background-image: url('t2.png');
	background-size: cover;
	}
h1{
font-size: 50px;
margin-top: 10px;
  margin-left: 80px;
color: white;
}
</style>
</head>
 
<body>
<header>
<a href="main.html" class="logo">Via.</a>
</header>  
<div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Create your account.<br></p>
                    <a href="signup.html" class="btn">Sign Up</a>
                </div>
            </div>
 
            <div class="col-right">
                <div class="login-form" style="color: #021c9e">
                    <h2>Login</h2>
                    <form action="" method="post">
                        <p>
                            <label style="color: #021c9e">Username<span>*</span></label>
                            <input type="text" name="username" placeholder="Username" required>
                        </p>
                        <p>
                            <label style="color: #021c9e">Password<span>*</span></label>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </p>
                        <p>
                            <input type="submit" value="Sign In">
                        </p>
                        
 
                    </form>
                </div>
            </div>
  
        </div>
    </div>
    </body>
    </html>