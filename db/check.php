<?php
include("connect.php");

session_start();

error_reporting(0);



$loginst = 0;
if ($_SESSION['username']){ 

$user_check = $_SESSION['username'];

$ses_sql = mysqli_query($con,"SELECT username FROM user WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql);

$login_user=$row['username'];

if(!empty($login_user)) 
{
   $loginst = 1;
}

}

mysqli_close($con);

?>