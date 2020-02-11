<?php
function new_paint_job($plate_no,$current_color,$target_color){
global $con;
							
					$sql = "INSERT INTO tblqueue (plate_no, current_color, target_color,status)
					VALUES ('$plate_no', '$current_color', '$target_color','NEW')";
					if ($con->query($sql) === TRUE) {
					   echo '
							<div class="alert alert-success" style=" z-index: 2">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Success!</strong>  New paint job added successfully.
							</div>';
					} else {
					    echo "Error: " . $sql . "<br>" . $con->error;
					}							
}

?>