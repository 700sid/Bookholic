<?php session_start(); ?>

<?php if(!empty($_SESSION['username'])){ header("location: book.php?"); exit(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/form.css" rel="stylesheet">
    <title>Book-O-Holic Login</title>
</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <a href="book.php"><img src="css/images/home--v2.png" id="icon" alt="User Icon" /></a>
          </div>
          
          <!-- Wrong Password/username prompt -->
          <div style="color: darkred"> <?php error_reporting(0);
                                 if($_GET['error']) {
                                echo '&#9888; incorrect username/ password please try again.' ;
                                  };
                                  
                                 if($_GET['update']) {
                                echo '&#9996; Password updated Login now ' ;
                                  };
                                  
                                  if($_GET['signup']) {
                                    echo '&#9996; Signup Success Login now ' ;
                                      }
                                      
                                  ?></div>

          <!-- Login Form -->
          <form method="POST" action="db/login.php">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="username" required>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="Forgot_password_1.php">Forgot Password?</a>
          </div>

          <!-- SignUp -->
          <div id="formFooter">Don't Have an account?
            <a class="underlineHover" href="signup.php">SignUp</a>
          </div>

      
        </div>
      </div>
</body>
</html>