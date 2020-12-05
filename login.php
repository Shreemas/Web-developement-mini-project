<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p style="font-size:30px;color:white;background-color:rgb(100, 13, 13);" class="error"><a style="text-decoration:none;color:white;cursor:pointer;" href="register1.php" target="_blank">Not a user?Register now!</a></p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
               echo '<p style="font-size:30px;color:white;
               background-color:rgb(100, 13, 13);" class="success"><a style="text-decoration:none;color:white;pointer:cursor;" href="index1.html" target="_blank">Congratulations,you can log in!Click here to Move to home</a></p>';
            } else {
                echo '<p style="font-size:30px;color:white;background-color:rgb(100, 13, 13);" class="error">Username and password combination is wrong!Please try again!</p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    <title>Login</title>
</head>
<body class="bg-image" style="background-image: url('login_image.jfif'); width: 100%; height: 100%;
   background-position:center;">

   <!--Ro make the background image appear to the width of the screen-->
    
    <div class="container" style="display: flex;justify-content: center;" >
       
        <form action="" method="post" name="signin-form" style="width:40%;">
            <div class="outer-box" style="border:2px rgb(100, 13, 13) solid;
            padding:40px;background-color: white;">

            <h1 style="text-align: center;color:rgb(100, 13, 13);">Login</h2>

			<div class="input-group">
               <!---- <label for="email"><b>E-mail:</b></label>-->
                <span class="input-group-addon"><i class="glyphicon glyphicon-user">
                </i></span>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" id="username" class="form-control input-lg" placeholder="Username" required>
            </div>

            <br>
            <br>


            <div class="input-group">
                <!--<label for="pass"><b>Password:</b></label>-->
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock">
                </i></span>
                <input type="password" name="password" id="pass" class="form-control input-lg" placeholder="Password" required>
            </div>

			<br>
			<br>

        <button type="submit" class="btn btn-info btn-lg" name="login" value="login"
        style="background-color:rgb(100, 13, 13);border-color:rgb(100, 13, 13);">
        <b>login</b></button>
        <p style="font-size: 25px;padding-top: 20px;">Not a user?<a 
        style="color: rgb(100, 13, 13);"  href="register1.php"><b>Register</b></a></p>
          
       </div>
        </form>
        
    </div>
    
    
</body>
</html>

<!--<form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>-->
