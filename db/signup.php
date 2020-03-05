<?php include("connect.php");   ?>

<?php 
session_start();
if(!empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<?php
if($_POST['cfm_password']!=$_POST['password']){
    header("location: ../signup.php?samepass=yes");
    exit();
}
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = password_hash($password,PASSWORD_BCRYPT);
    $DOB=$_POST['DOB'];
    $email=$_POST['email'];


    $sql = "SELECT id FROM user WHERE username = '$username'";
    $result = mysqli_query($con,$sql);

    $count = mysqli_num_rows($result);

    //mysqli_close($con);

    if($count == 1) {
        mysqli_close($con);
        
        header("location: ../signup.php?taken=yes");
        exit();
     }
     else {

        $ck = mysqli_query($con,"INSERT INTO user (username,password,dob,email) VALUES ('$username','$password','$DOB','$email')");

        /*for checking
        if ($ck === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $ck . "<br>" . $con->error;
        }*/

        mysqli_close($con);

        header("Location: ../login.php?signup=done");
        exit();
        }
?>    