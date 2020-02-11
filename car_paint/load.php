 <?php
 include 'php/conn.php';
 ?>  
 <h4>Paint Jobs in Progress</h4> 
     <table class="table table-striped">
      <thead>
      <tr>
        <th>PLATE NO</th>
        <th>CURRENT COLOR</th>
        <th>TARGET COLOR</th>
          <th>ACTION</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
  <?php
    $sql = "SELECT * FROM tblqueue WHERE status='NEW' ORDER BY id LIMIT 5";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          $id = $row['id'];
               $plate_no = $row['plate_no'];
               $current_color = $row['current_color'];
               $target_color = $row['target_color'];
                echo '<tr>
                      <td>'.$plate_no.'</td>
                      <td>'.$current_color.'</td>
                      <td>'.$target_color.'</td>
                      <td><a id="add-button" class="btn btn-primary" href="mark-completed.php?id='.$id.'">Mark as Completed</a></td>
                    </tr>';
          }
       
      } else {
          echo "0 results";
      }

    ?>

      </tbody>
      </table>

    <h4>Paint Queue</h4> 

    <table class="table table-striped">
      <thead>
      <tr>
        <th>PLATE NO</th>
        <th>CURRENT COLOR</th>
        <th>TARGET COLOR</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
  <?php
    $sql = "SELECT * FROM tblqueue WHERE status='NEW' ORDER BY id LIMIT 20 OFFSET 5";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          $id = $row['id'];
               $plate_no = $row['plate_no'];
               $current_color = $row['current_color'];
               $target_color = $row['target_color'];
                echo '<tr>
                      <td>'.$plate_no.'</td>
                      <td>'.$current_color.'</td>
                      <td>'.$target_color.'</td>
                    </tr>';
          }
       
      } else {
          echo "0 results";
      }

    ?>

      </tbody>
      </table>



      <div class="card col-md-8">
  <div class="card-header bg-warning">
    <b>SHOP PERFORMANCE</b>
  </div>
  <div class="card-body">
   <?php   
    $sql = "SELECT * FROM tblqueue WHERE status='COMPLETED'";
    $result = $con->query($sql);
    $total_painted = $result->num_rows;

    $sql = "SELECT * FROM tblqueue WHERE target_color='Blue'";
    $result = $con->query($sql);
    $blue = $result->num_rows;

    $sql = "SELECT * FROM tblqueue WHERE target_color='Red'";
    $result = $con->query($sql);
    $red = $result->num_rows;


    $sql = "SELECT * FROM tblqueue WHERE target_color='Green'";
    $result = $con->query($sql);
    $green = $result->num_rows;


    ?>





<br> <b>TOTAL CARS Painted: <?php echo $total_painted ?></b>
<br> <b> Breakdown: </b>
<br> Blue: <?php echo $blue ?>
<br> Red: <?php echo $red ?>
<br> Green: <?php echo $green ?>

  </div>
  </div>