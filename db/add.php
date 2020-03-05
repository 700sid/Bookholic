<?php include("connect.php");   ?>


<?php

    session_start();

    $book_name=$_POST['book_name'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
    $user=$_SESSION['username'];
    $base_price=$_POST['BasePrice'];
    $sell_price=$_POST['SellPrice'];
    $selldon=$_POST['selldon'];
    $image=addslashes (file_get_contents($_FILES['pic']['tmp_name']));

    


    $ck = mysqli_query($con,"INSERT INTO books (Book_name,Author_Name,publisher,Seller_Name,Base_price,Selling_price,saledon,image)  VALUES ('$book_name','$author','$publisher','$user','$base_price','$sell_price','$selldon','$image')");

    //for checking
    if ($ck === TRUE) {
        echo "New record created successfully";

        header("location: ../profile.php");
        exit();
    } 
    else {
        echo "Error: " . $ck . "<br>" . $con->error;
    }

    mysqli_close($con);

    header("Location: ../book.php");
    exit();
        
?>    