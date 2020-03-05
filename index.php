<?php include("db/check.php");  
      include("db/connect.php");
       ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Social Footer, Colour Matching Icons -->
    <!-- Include Font Awesome Stylesheet in Header -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<title><?php 

if ($loginst == 1){
    echo $_SESSION['username'],' Book-O-Holic'; 
    }
     
    else {
        echo 'Book-O-Holic'; 
    } 
    ?></title>
</head>

<?php    
    $sql="SELECT count(id) as total from books where saledon='Sale'";
    $run = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($run);
    $count = $result['total'];
?>

<body>




    <?php 

    if ($loginst == 1){
        include("nav.php"); 
        }
         
        else {
            include("nav1.php"); 
        } 
        ?>


<div class="row">
    <div class=" col-md-12 jumbotron" style="padding:15px">
        <div class="col-md-6 col-lg-6"
            style="border-style:solid;border-width:1px;border-radius:15px;margin-left:5px;margin-up:2px;">
            <h1>Book-O-Holic</h1>
            <p align="justify">This site will help you in <i><b>Buy/Sell/Donate</b></i> a book</p>
        </div>
    </div>
</div>

<div class="row">
    <div style="border-style:solid;border-width:1px;border-radius:15px;margin:18px;">
        <img src="css/images/bglanding.png" alt="" width="100%" draggable="false">
    </div>
</div>

<div class="row" style="margin-left:2%;margin-right:2%;">
    <center>
        <a class="btn btn-primary btn-lg btn-block" href="book.php" role="button"><span
                class="glyphicon glyphicon-menu-left"></span><b
                style="font-size: large;font-weight: bold;font-family: Bookman, Times,
                serif;">&nbsp;&nbsp;Click here & become a Book-O-Holic&nbsp;&nbsp;</b> <span
                class="glyphicon glyphicon-menu-right"></span></a>
    </center>
</div>

<div class="row" style="padding:12px;">
    <div class="row">

        <div class="col-md-6" style="text-align:center">
            <p class="quote-box">
                <span class="quote-text">“So many books, so little time.”</span><br>
                <span class="quote-writer">― Frank Zappa</span>
            </p>
        </div>
        <div class="col-md-6" style="text-align:center">
            <p class="quote-box">
            <span class="quote-text">“A room without books is like a body without a soul.”</span><br>
            <span class="quote-writer">― Marcus Tullius Cicero</span>
            </p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6" style="text-align:center">
            <p class="quote-box">
            <span class="quote-text">“There is no friend as loyal as a book.”</span><br>
            <span class="quote-writer">― Ernest Hemingway</span>
            </p>
        </div>
        <div class="col-md-6" style="text-align:center">
            <p class="quote-box">
            <span class="quote-text">“Only the very weak-minded refuse to be influenced by literature and poetry.”</span><br>
            <span class="quote-writer">― Cassandra Clare, Clockwork Angel</span>
            </p>
        </div>

    </div>

</div>


<!-- About us preview-->

<div class="row">
<div class="about-landing-main"> 
<img src="css/images/sid.png" alt="about sid card" align="right" class="about-landing" style="margin-left=10%;">
</div>
</div>

<div class="row">
<div class="about-landing-main">
<img src="css/images/sneha.png" alt="about sneha card" class="about-landing">
</div></div>



<div class="row">
        <!-- // -->
        <div class="container">
            <div class="text-center center-block">
                <a href="mailto: 2000sidhu@gmail.com"><i id="social-gl" class="fa fa-google fa-3x social"></i></a>
                <a href="https://www.facebook.com/siddharth.kushwaha.908"><i id="social-fb"
                        class="fa fa-facebook-square fa-3x social"></i></a>
                <a href="https://twitter.com/7__sid"><i id="social-tw"
                        class="fa fa-twitter-square fa-3x social"></i></a>
                <a href="https://www.instagram.com/7__sid/?hl=en"><i id="social-ig"
                        class="fa fa-instagram fa-3x social"></i></a>
                <a href="https://github.com/700sid"><i id="social-gh" class="fa fa-github fa-3x social"></i></a><br>
                &#169; Siddharth & Sneha Kaltari, 2019
            </div>
        </div>
        <div>

</body>

</html>