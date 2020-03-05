<?php session_start(); ?>

<?php
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/form.css" rel="stylesheet">
    <title>Forgot Password - Enter Username</title>
</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <a href="book.php"><img src="css/images/home--v2.png" id="icon" alt="User Icon" /></a>
          </div>

          <!-- Wrong username prompt -->
          <div style="color: darkred"> <?php error_reporting(0);
                                 if($_GET['usernotfound']) {
                                echo '&#9888; incorrect username please try again.' ;
                                  } 
                                 if($_GET['wrongdob']) {
                                echo '&#9888; incorrect Date Of Birth please try again.' ;
                                  } 
                                 if($_GET['somethingwrong']){
                                   echo '&#9888; Something went wrong please try again.';
                                 }
                                 if($_GET['passame']){
                                  echo '&#9888; Password is not same please try again.';
                                }
                                  ?></div>

          <!-- Question Telling -->
          <div id="formFooter">
            Enter Your User Name</a>
          </div>
          
          <!-- Login Form -->
          <form method="POST" action="Forgot_password_2.php">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="username" required>
            <input type="submit" class="fadeIn fourth" value="Next">
          </form>

      
        </div>
      </div>
</body>
</html>