<?php include("connect.php"); ?>

<?php 
session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT password FROM user WHERE username = '$username'";
    $result = mysqli_query($con,$sql);
    
    $final = mysqli_fetch_array($result);
    mysqli_close($con);
    // If result matched $username and $password, table row must be 1 row
      
    if(password_verify($password, $final['password'])) {
       $_SESSION['username'] = $username;
       
       header("location: ../book.php?");
       exit();
    }else {

       header("location: ../login.php?error=done");
       exit();
    }
 }

?>