<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="style_login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
<div class="container">
<div class="header">
<h2>Register</h2>
</div>
<br>

<form action="register.php" method="post">
<?php include('errors.php') ?>
  <div class="input">
  <label for="username" >User name:</label>
<input type="text"  name="username" placeholder="username" required ><br>
<label for="Email" >Email:</label>
<input type="text" name="email" placeholder="Email" required><br>
<label for="password" >Password:</label>
<input type="password" name="password1" placeholder="Password" required><br>
<label for="password2" >Confirm Password:</label>
<input type="password"  name="password2" placeholder="Confirm Password" required><br>
</div>
<input class="btn" type="submit" name="register" id="" value="Register">
  

</form>
<br>
<p>Already a user ! <a href="login.php"><b> Login</b> </a> </p>
</div>

  </body>
</html>
