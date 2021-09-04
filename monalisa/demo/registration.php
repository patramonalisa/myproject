<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db_config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
       $passw=stripslashes($_REQUEST['pass1']);  //REMOVE BACKSLASHES
	   $pass2=mysqli_real_escape_string($con,$passw);
	   
	   
    
        $sql="INSERT into `user`(id,username,email, password )VALUES('','$username','$email','".md5($pass2)."')";
		
        $res=mysqli_query($con,$sql);
        if ($res) {
           echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
           echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

   <form class="form" method="post" action="" name="login">
<h1 class="login-title">Registration Form</h1>
User Name : <input type="text" class="login-input" name="username" placeholder="Enter user name"><br><br>
Email id : <input type="email" class="login-input" name="email" placeholder="Enter valid email-id"><br><br>
Password : <input type="password" class="login-input" name="pass1" placeholder="Enter password"><br><br>
<input type="submit" name="submit" class="login-button" value="register">
<p class="link"><a href="login.php">Click to Login</a></p>

</form>
<?php
    }
?>

</body>
</html>