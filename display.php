<div class="row">
<?php include("db/connect.php");
if ($_GET['pageno']){
$current_page = $_GET['pageno'];
}
else{
  $current_page=1;
}
$offset = ($current_page-1)*20;

$sql = "SELECT * FROM books where saledon='Sale' LIMIT 20 OFFSET $offset";
$run = mysqli_query($con,$sql);

while($result=mysqli_fetch_array($run))
{
echo '<div class="col-lg-2 col-md-3 col-sm-4" >
<div class = "thumbnail">
<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>

   <div class = "caption"">
    <h3>',$result['Book_name'],'</h3>
    <p>',$result['Author_Name'],'</p>

    <p>
       <a href = "detail.php?id=',$result['id'],'" class = "btn btn-primary" role = "button">
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

<div class="row">

<br>
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
  echo '<li class="page-item"><a class="page-link" href="book.php?pageno=',$current_page-1,'">Previous</a></li>';
  
  for($i=1;$i<=$totalpage;$i++) {
      if ($current_page==$i) {
        echo '<li class="page-item active"><a class="page-link">',$i,'</a></li>';
      }
      else {
    echo '<li class="page-item"><a class="page-link" href="book.php?pageno=',$i,'">',$i,'</a></li>';
   }  }
   if ($current_page==$totalpage){
    echo '<li class="page-item disabled"><a class="page-link" tabindex="-1">Next</a></li>';
  }
  else
  echo '<li class="page-item"><a class="page-link" href="book.php?pageno=',$current_page+1,'">Next</a></li>';
  
   
   ?>
  </ul>
</nav>
</div>

</div>