<div class="row">
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
    </div>
<div class="row">
    <center>
<form class="form-inline" method="GET" action="search.php">
<input type="text" class="form-control" id="search" placeholder="Search" name="search" required style="margin-left:20px;">
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</center>
</div><br>