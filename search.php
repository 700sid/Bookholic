<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="css/images/home--v2.png" type="image/icon type">

    <!-- Social Footer, Colour Matching Icons -->
    <!-- Include Font Awesome Stylesheet in Header -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Search For "<?php $search = $_GET['search']; echo $search; ?>"</title>
</head>
<body>
<?php

include("db/check.php");
include("db/connect.php");

if ($loginst == 1){
        include("nav.php"); 
        }
         
        else {
            include("nav1.php"); 
        } 

$value = mysqli_real_escape_string($con, $search);

if ($_GET['pageno']){
  $current_page = $_GET['pageno'];
  }
  else{
    $current_page=1;
  }

$offset = ($current_page-1)*20;

$sql = "SELECT * FROM books where Book_name LIKE '%".$value."%' LIMIT 20 OFFSET $offset";
$run = mysqli_query($con,$sql);

echo '<div class="row">';
while($result=mysqli_fetch_array($run))
{
echo '<div class="col-lg-2 col-md-3 col-sm-4 ">
  <div class="thumbnail">
    <img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'" />

    <div class="caption">
      <h3>',$result['Book_name'],'</h3>
      <p>',$result['Author_Name'],'</p>

      <p>
        <a href="detail.php?id=',$result['id'],'" class="btn btn-primary" role="button">
          Details
        </a>
      </p>
    </div>
  </div>


</div>';

}


mysqli_close($con);

?>
    </div>




<div class="row" style="text-align:center">

        
<div class="d-flex p-2">
<nav aria-label="Page navigation example" style="text-align:center">
<ul class="pagination">
<?php 
 $totalpage = floor(($count/20)+1);
 if($totalpage%20==0){
   $totalpage = $totalpage-1;
 }

if ($current_page==1){
echo '<li class="page-item disabled"><a class="page-link" tabindex="-1">Previous</a></li>';
}
else
echo '<li class="page-item"><a class="page-link" href="search.php?pageno=',$current_page-1,'&search=',$search,'">Previous</a></li>';

for($i=1;$i<=$totalpage;$i++) {
if ($current_page==$i) {
echo '<li class="page-item active"><a class="page-link">',$i,'</a></li>';
}
else {
echo '<li class="page-item"><a class="page-link" href="donate.php?search=',$i,'&search=',$search,'">',$i,'</a></li>';
}  }
if ($current_page==$totalpage){
echo '<li class="page-item disabled"><a class="page-link" tabindex="-1">Next</a></li>';
}
else
echo '<li class="page-item"><a class="page-link" href="search.php?pageno=',$current_page+1,'&search=',$search,'">Next</a></li>';


?>
</ul>
</nav>
</div>
</div>

<div class="row">
<div style=" bottom:0; text-align:center">
  <div>
    <a href="mailto: 2000sidhu@gmail.com"><i id="social-gl" class="fa fa-google fa-3x social"></i></a>
    <a href="https://www.facebook.com/siddharth.kushwaha.908"><i id="social-fb"
        class="fa fa-facebook-square fa-3x social"></i></a>
    <a href="https://twitter.com/7__sid"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
    <a href="https://www.instagram.com/7__sid/?hl=en"><i id="social-ig"
        class="fa fa-instagram fa-3x social"></i></a>
    <a href="https://github.com/700sid"><i id="social-gh" class="fa fa-github fa-3x social"></i></a><br>
    &#169; Siddharth & Sneha Kaltari, 2019
  </div>
</div>
</div>

  
</body>
</html>

