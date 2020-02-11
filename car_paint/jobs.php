<?php
include 'php/functions.php';
include 'header.php';
include 'php/conn.php';
?>

<div class="container">
  <h2>PAINT JOBS</h2> 
<?php
    if(isset($_GET['code'])){
     if($_GET['code']==10001){
        echo '
        <div class="alert alert-success" style=" z-index: 2">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Data marked as completed successfully.
        </div>';
     }
    }
?>



   

<div id="links"></div>




</div>
<?php
include 'footer.php';
?>