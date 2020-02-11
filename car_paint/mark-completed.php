<?php
include 'php/conn.php';
$id=$_GET['id'];
$sql = "UPDATE tblqueue SET status='COMPLETED' WHERE id='$id'";
					if ($con->query($sql) === TRUE) {
					header("location:jobs.php?code=10001");
					} else {
					    echo "Error: " . $sql . "<br>" . $con->error;
					}	
?>