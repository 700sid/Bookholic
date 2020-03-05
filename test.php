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


<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-brand">
            Book-O-Holic</div>
            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>&nbsp; &nbsp; &nbsp;</li>
                    <li> &nbsp; </li>
                    <li class="">
                        <a href="book.php?pageno=1">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Books
                        </a>
                    </li>

                    <li class="">
                        <a href="donate.php?pageno=1">
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Donated Books
                        </a>
                    </li>

                    <li class="">
                        <a href="">
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> About Us
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="add.php">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Book
                        </a>
                    </li>
                    <li class="">
                        <a href="profile.php">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php echo "",$_SESSION['username'],"";     ?>

                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
                        </a>
                    </li>
                </ul>

            </div>
        </div>


    </nav>
    </div></div>

<div class="row">
<div class="col-md-12">
<center>
<form class="form-inline" method="GET" action="search.php">
<input type="text" class="form-control" id="search" placeholder="Search" name="search" required>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</center>
</div></div>
