<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | WILIS SPACEHOOPS</title>
    <link rel = "icon" href = "img/icon.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="config.php" method="post" class="box">
       <div class="header">
           <h4>Login To Your Account</h4>
           <p>Welcome Troops! Take your seat, <br> and let's fight with us.</p>
       </div>
       <div class="login-area">
           <input type="text" name="username" class="username" placeholder="Username">
           <input type="password" name="password" class="password" placeholder="Password">
           <input type="submit" name="login" value="Login" class="submit">
           <a href="#">Forgot Password?</a>
       </div>
   </form> 
</body>
</html>