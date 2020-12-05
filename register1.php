<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p style="font-size:30px;color:white;background-color:rgb(100, 13, 13);" class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p style="font-size:30px;color:white;background-color:rgb(100, 13, 13); class="success"><a style="text-decoration:none;color:white;cursor:pointer;" href="login.php" target="_blank">Your registration was successful!Click here to Login</a</p>';
                
            } 
            else {
                echo '<p style="font-size:30px;color:white;background-color:rgb(100, 13, 13);" class="error">Something went wrong!</p>';
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

    <title>Register</title>
</head>
<body class="bg-image" style="background-image: url('login_image.jfif'); width: 100%; height: 100%;
   background-position:center;">

   <!--Ro make the background image appear to the width of the screen-->
    
    <div class="container" style="display: flex;justify-content: center;" >
       
        <form action="" method="post" name="signup-form" style="width:40%;">
            <div class="outer-box" style="border:2px rgb(100, 13, 13) solid;
            padding:40px;background-color: white;">

            <h1 style="text-align: center;color:rgb(100, 13, 13);">Register</h2>

			<div class="input-group">
               <!---- <label for="email"><b>E-mail:</b></label>-->
                <span class="input-group-addon"><i class="glyphicon glyphicon-user">
                </i></span>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" id="username" class="form-control input-lg" placeholder="Username" required>
            </div>

            <br>
            <br>

            <div class="input-group">
               <!---- <label for="email"><b>E-mail:</b></label>-->
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope">
                </i></span>
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" required>
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

        <button type="submit" class="btn btn-info btn-lg" name="register" value="register"
        style="background-color:rgb(100, 13, 13);border-color:rgb(100, 13, 13);">
        <b>Register</b></button>
        <p style="font-size: 25px;padding-top: 20px;">Already a user?<a 
        style="color: rgb(100, 13, 13);"  href="login.php"><b>Login</b></a></p>
          
       </div>
        </form>
        
    </div>
    
    
</body>
</html>
<!--<form method="post" action="register.php" name="signup-form">
<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register</button>
</form>-->
