<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php
	include('../db_conn.php');
	include('profile.php');
	session_start();

	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$mail = $_SESSION['mail'];
	
	$sql = "UPDATE student SET last_name='$lname', firstname='$fname' email ='$mail' WHERE id='$id' ";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} 
	else {
		echo "Error updating record: " . $conn->error;
	}
?>