<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php
	include('../db_conn.php');
	include('profile.php');
	

	$id = $_SESSION['id'];
	$fname = $_SESSION['first_name'];
	$lname = $_SESSION['last_name'];
	$mail = $_SESSION['email'];
	
	$sql = "UPDATE student SET last_name='$lname', first_name='$fname' email ='$mail' WHERE id='$id' ";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} 
	else {
		echo "Error updating record: " . $conn->error;
	}
?>