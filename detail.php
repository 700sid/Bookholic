<?php include("db/check.php");   ?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="css/images/home--v2.png" type="image/icon type">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Include Font Awesome Stylesheet in Header -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
    crossorigin="anonymous">
  <title><?php echo $result['Book_name'], ' for ', $result['saledon']; ?></title>
</head>

<body>


  <?php 

    if ($loginst == 1){
        include("nav.php"); 
        } 
        
        else { 
        include("nav1.php"); 
        
         } ?>

 <div class="row">

<?php 

include('db/connect.php');
$id = $_GET['id'];

$sql = "SELECT * FROM books where id=$id";
$run = mysqli_query($con,$sql);

$result=mysqli_fetch_array($run);
if ($result)
{
$uname = $result['Seller_Name'];

$sql1 = "SELECT email FROM user WHERE username = '$uname'";
$run1 = mysqli_query($con,$sql1);
$result1 = mysqli_fetch_array($run1);


echo '<div class="col-lg-3 col-md-4 col-sm-6 " >
<div class = "thumbnail">
     <img src = "data:image/jpeg;base64,'.base64_encode( $result['image'] ).'">
  

   <div class = "caption">
    <h3>',$result['Book_name'],'</h3>
    <p>',$result['Author_Name'],'</p>
     <p></p>
   </div>
</div>
</div>

<div class="col-lg-9 col-md-4 col-sm-6 " >
<div class="" >
             

   
    <h3><b>',$result['Book_name'],'</b></h3>
    <p><b>Author:</b>',$result['Author_Name'],'</p>
    <p><b>Publisher:</b>',$result['Publisher'],'</p>
    <p><b>Price of book:</b>&#8377;',$result['Base_price'],'</p>';
    
    if($result['saledon']=='Donate'){
      echo '<br><b></b>
      <p><b>This Book is avilable for Donate so contact the Donor:</b>
      <h3><a href="mailto: ',$result1['email'],'?subject=Interested in your book ', $result['Book_name'],' from Bookoholic.com">',$result1['email'],'</a></h3></p>';
    }

    if($result['saledon']=='Sale'){
      echo '<br><b></b>
      <p><b>This Book is avilable for Sale at <b>&#8377;',$result['Selling_price'],'</b> <br/>so contact the seller and Negotiate:</b>
      <h3><a href="mailto: ',$result1['email'],'?subject=Interested in your book ', $result['Book_name'],' from Bookoholic.com">',$result1['email'],'</a></h3></p>';
    }

    echo '</div>
</div>';
}
else
  echo '<h2 style="text-align:center;">Book Is Not Available</h2>';


?>
</div>
<div class="row">

  <div class="container">
    <div class="text-center center-block">
      <a href="mailto: 2000sidhu@gmail.com"><i id="social-gl" class="fa fa-google fa-3x social"></i></a>
      <a href="https://www.facebook.com/siddharth.kushwaha.908"><i id="social-fb"
          class="fa fa-facebook-square fa-3x social"></i></a>
      <a href="https://twitter.com/7__sid"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
      <a href="https://www.instagram.com/7__sid.py"><i id="social-ig" class="fa fa-instagram fa-3x social"></i></a>
      <a href="https://github.com/700sid"><i id="social-gh" class="fa fa-github fa-3x social"></i></a><br>
      &#169; Siddharth, 2019
    </div>
  </div>
</div>
</body>

</html>