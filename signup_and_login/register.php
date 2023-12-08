


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

<div class="main"> 

    <h2> Sign up </h2>

<!--link this form tag with the register_post page-->
    <form action="register_post.php" method="POST"> 
<!--when user click on the register button the action will take them to sign up / register_post.php code-->

    <?php if(isset($username_error)){
     // to print username error messages in register_post page
        echo $username_error;
    } ?> 
     <input type="text" name="username" id="username" placeholder="username" ><br>


    <?php if(isset($email_error)){
     // to print email error messages in register_post page
        echo $email_error;
    } ?>
     <input type="email" name="email" id="email" placeholder="email"><br>



    <?php if(isset($password_error)){
     // to print password error messages in register_post page
        echo $password_error;
    } ?>
     <input type="password" name="password" id="password" placeholder="password"><br>


     <input type="submit" name="submit" id="submit" value="Register"><br>
    
    </form> 

     <h5><i> already have an account? </i></h5> <br>
     <a id="login" href="index.html"> Log in </a> <!--***-->

</div>

</body>
</html>