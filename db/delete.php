<?php include("connect.php");   
session_start();
?>

<?php 
$username=$_SESSION['username'];
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id=$id and Seller_Name='$username'";
$result = mysqli_query($con,$sql);

header("location: ../profile.php");
exit();

?>