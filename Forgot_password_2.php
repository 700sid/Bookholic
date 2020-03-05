<?php include('db/connect.php') ?>

<?php 
session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>


<?php
$username = $_POST['username'];

$sql = "SELECT username FROM user WHERE username='$username'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

mysqli_close($con);

if($count == 1);
else{
  header("Location: Forgot_password_1.php?usernotfound=yes");
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
    <title>Forgot Password - Enter Date Of Birth</title>
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
            Enter Your Date Of Birth</a>
          </div>
          
          <!-- Login Form -->
          <form method="POST" action="Forgot_password_3.php?username=<?php echo $username; ?>">
          <input type="date" name="DOB" id="DOB" class="fadeIn second" placeholder="Date of Birth" required>
            <input type="submit" class="fadeIn fourth" value="Next">
          </form>

      
        </div>
      </div>
</body>
</html>