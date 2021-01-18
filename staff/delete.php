<!-- Done by Priscilla Uramina w63489 Lab9_DIS -->
<?php

/*include external files for connectivity to database and functionalities */
include('dbconnect.php');
include('guest_list.php');
//session_start();
	
	//Task 6
		 $id = $_SESSION['id'];
		// sql to delete a record
		$sql = "DELETE FROM myguests WHERE id='$id'";

		if ($conn->query($sql) === TRUE) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}
	?>