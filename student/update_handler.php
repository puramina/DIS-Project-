<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php
	include('../db_conn.php');


	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['id'];
    $age = $_POST['age'];
    $dateofbirth = $_POST['dateofbirth'];
    $nationality = $_POST['nationality'];
    $postalAddress = $_POST['postalAddress'];

	
	$sql = "UPDATE student SET first_name='$firstname', last_name='$lastname', email='$email', gender='$gender', age='$age', dateofbirth='$dateofbirth', nationality='$nationality', postalAddress='$postalAddress'  WHERE id='$id'";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} 
	else {
		echo "Error updating record: " . $conn->error;
	}

	header("Location: http://localhost/DIS-Project-/index.php", true, 301);
    exit();


?>