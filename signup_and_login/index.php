
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <div class="main">
         <h2> Log in </h2>
         <i> lets create </i> <br> <br>
         <form action="login.php" method="POST">
              <?php 
                if(isset($username_error)){
                   echo $username_error;
                   } 
              ?> 
              <input type="text" name="username" id="username" placeholder="username"><br>


              <?php 
                if(isset($password_error)){
                   echo $password_error;
                   } 
              ?> 
              <input type="password" name="password" id="password" placeholder="password"><br>
              <input type="submit" name="submit" id="submit" value="Log in" ><br>
         </form>

         <h5><i>dosent have an account?</i></h5> <br>
         <a id="register" href="register.php"> Register</a>
         <!--id is login because i want to have the same styling as login button-->
    </div>
    
</body>
</html>