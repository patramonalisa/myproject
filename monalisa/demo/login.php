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
   session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: welcome.php");
		
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    
  
  <form class="form" method="post" name="login">
<h1 class="login-title">LOgin Form</h1>
User Name : <input type="text" class="login-input" name="username"required placeholder="Enter user name" autofocus="true"/><br><br>
Password : <input type="password" class="login-input" name="pass" required placeholder="Enter password"><br><br>
<input type="submit" name="submit" class="login-button" value="login">


<p class="link"><a href="registration.php">New registration</a></p>
</form>
  
<?php
    }
?>
</body>
</html>
