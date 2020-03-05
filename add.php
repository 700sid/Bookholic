<?php session_start();
if(empty($_SESSION['username'])){ header("location: book.php"); exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="css/images/home--v2.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/form.css" rel="stylesheet">
    <title><?php echo $_SESSION['username'],' adding a Book'; ?></title>
</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <a href="book.php"><img src="css/images/home--v2.png" id="icon" alt="User Icon" /></a>
          </div>
          
          <!-- Login Form -->
          <form method="POST" action="db/add.php" enctype="multipart/form-data">
            <input type="text" id="book_name" class="fadeIn second" name="book_name" placeholder="Book Name" required>
            <input type="text" id="author" class="fadeIn third" name="author" placeholder="Author" required>
            <input type="text" id="publisher" class="fadeIn second" name="publisher" placeholder="Published By" required>
            <input type="number" id="BasePrice" class="fadeIn third" name="BasePrice" placeholder="Base Price" required>
            <input type="number" id="SellPrice" class="fadeIn third" name="SellPrice" placeholder="Selling Price, Write zero if you are a donar " required>
            <div class="fadeIn second" style="color: #808080;background-color: #f6f6f6;font-size: 16px;padding: 15px 32px; margin: 5px; width: 85%; border: 2px solid #f6f6f6;">
            <input type="radio" id="selldon" name="selldon" value="Sale" required>: Sale
            <input type="radio" id="selldon" name="selldon" value="Donate" required>: Donate </div>
            <div class="fadeIn third" style="color: #808080;background-color: #f6f6f6;font-size: 16px;padding: 15px 32px; margin: 5px; width: 85%; border: 2px solid #f6f6f6;">
            Book Image :<input type="file" name="pic" accept="image/*" required>
            </div>
            <input type="submit" class="fadeIn fourth" name="submit" value="Add">
          </form>
      
          <!-- Remind Passowrd -->
          <!--div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div-->
      
        </div>
      </div>
</body>
</html>