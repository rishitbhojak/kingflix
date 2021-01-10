<?php

if(isset($_POST["submitButton"]))
{
echo "Form was submitted!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Kingflix!</title>
    <link rel="stylesheet" type = "text/css" href="assets/style/style.css"/>
</head>
<body>
   <div class="signInContainer">
   <div class="column">

   <div class="header">
   <img src="assets/images/logo.png" alt="Logo" srcset="">
       <h3>Sign In!</h3>
       <span>To Continue to Kingflix</span>
      
   </div>
   <form method="post">
     
       <input type="text" name="username" placeholder="Username" required>
      
       <input type="password" name="password" placeholder="Password" required>
      
       <input type="submit" name="SubmitButton" value = "Submit">
   </form>
   <a href="register.php" id="signinMessage">Need an account? Sign up!</a>
   </div>
   </div>
</body>
</html>