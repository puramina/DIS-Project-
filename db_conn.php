<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php 
/*Connect to database*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studentmanagementsys";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
?>