<?php
$conn=mysqli_connect("localhost","root","","studentmanagementsys");
session_start();

$decp = $_POST['description'];

$sql = "INSERT INTO discusson (decp)
VALUES ('".$decp."')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully ".$conn->insert_id;
	header("Location: http://localhost/DISProjectmain/student/discussion.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


?>