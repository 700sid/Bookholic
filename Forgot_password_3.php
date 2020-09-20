<?php include('db/connect.php') ?>

<?php 
session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>


<?php
$DOB = $_POST['DOB'];
$username = $_GET['username'];


if(empty($DOB)){
header("Location: Forgot_password_1.php?somethingwrong=yes");
exit();}

$sql = "SELECT dob FROM user WHERE username='$username'";
$result = mysqli_query($con,$sql);
$row = $result->fetch_array();
mysqli_close($con);
if($row[0] == $DOB);

else if(empty($DOB)){
header("Location: Forgot_password_1.php?somethingwrong=yes");
exit();
}
else {
  header("Location: Forgot_password_1.php?wrongdob=yes");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/form.css" rel="stylesheet">
    <script src="js/passval.js"></script>
    <title>Forgot Passwort - New Password</title>
</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <a href="book.php"><img src="css/images/home--v2.png" id="icon" alt="User Icon" /></a>
          </div>

          <!-- Question Telling -->
          <div id="formFooter">
            Create a New Password</a>
          </div>
          
          <!-- Login Form -->
          <form onSubmit="return validate()" action="db/Forgot_password_4.php?username=<?php echo $username; ?>&dob=<?php echo $DOB; ?>" method="POST">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
            <input type="password" id="cfm_password" class="fadeIn third" name="cfm_password" placeholder="Confirm password" required>
            <input type="submit" class="fadeIn fourth" value="Submit">
          </form>

      
        </div>
      </div>
</body>
</html>