<?php
include 'php/functions.php';
include 'header.php';
include 'php/conn.php';
?>

<div class="container">
  <h2>NEW PAINT JOB</h2> 
<img src="banner.JPG">
<?php
if(isset($_POST['submit_paint_job'])){
	$plate_no = mysqli_real_escape_string($con,$_POST['plate_no']);
	$current_color = mysqli_real_escape_string($con,$_POST['current_color']);
	$target_color = mysqli_real_escape_string($con,$_POST['target_color']);
	new_paint_job($plate_no,$current_color,$target_color);
}

?>




<form method="POST" action="">
	<b>Car Details</b><br>
	Plate No: <input style="width: 50%" type="text" name="plate_no" class="form-control"> 

	Current Color: 
	<select style="width: 50%" name="current_color" class="form-control">
		 <option value="Red">Red</option>
		  <option value="Blue">Blue</option>
		  <option value="Green">Green</option>
  </select>
  	Target Color: 
	<select style="width: 50%" name="target_color" class="form-control">
		  <option value="Blue">Blue</option>
		  <option value="Red">Red</option>
		  <option value="Green">Green</option>
  </select>
  <br>
  <button type="submit" name="submit_paint_job" class="btn btn-success">Submit</button>
</form>
</div>
<?php
include 'footer.php';
?>