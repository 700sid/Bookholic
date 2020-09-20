<?php include('connect.php') ?>

<?php 
session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<?php 
if($_POST['cfm_password']!=$_POST['password']){
    header('location: ../Forgot_password_1.php?passame=no')
}
$username = $_GET['username'];
$password = $_POST['cfm_password'];
$password = password_hash($password,PASSWORD_BCRYPT);

$sql = "UPDATE user SET password = '$password' WHERE username = '$username'";
$result = mysqli_query($con,$sql);

mysqli_close($con);

header("Location: ../login.php?update=done");
exit();

?>