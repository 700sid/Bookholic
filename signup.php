<?php session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/passval.js"></script>
    <link href="css/form.css" rel="stylesheet">
    <title>Book-O-Holic SignUp</title>
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
                                          if($_GET['taken']) {
                                          echo '&#9888; username already taken' ;
                                            }

                                            if($_GET['samepass']) {
                                              echo '&#9888; Password is not same' ;
                                                }
                                             ?>

          
          <!-- Login Form -->
          <form onSubmit="return validate()" method="POST" action="db/signup.php">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="username" required>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
            <input type="password" id="cfm_password" class="fadeIn third" name="cfm_password" placeholder="Confirm password" required>
            <input type="date" name="DOB" id="DOB" class="fadeIn second" placeholder="Date of Birth" required>
            <input type="email" name="email" id="email" class="fadeIn third" placeholder="E-mail">
            <input type="submit" class="fadeIn fourth" value="SignUp">
          </form>
      
          <!-- LogIn -->
          <div id="formFooter">Already Have an Account?
            <a class="underlineHover" href="login.php">LogIn </a>
          </div>
      
        </div>
      </div>
</body>
</html>