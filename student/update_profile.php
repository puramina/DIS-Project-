<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php
/*include external files for connectivity to database and functionalities */
include('../db_conn.php');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>VU WSIZ</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>

		<?php
		 $userID = $_SESSION['id'];
		
		$sql = "SELECT * FROM student WHERE id='$$userID' ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {

			 while($row = $result->fetch_assoc()) {
						
				echo ("<form action='update_handler.php' method=POST>
						Firstname <input name='firstname' type='text'>
						Lastname <input name='lastname' type='text'>
						email <input name='email' type='email'>
						<input type='submit' value='Update record'>
						</form>");
							
			}
		} 
		else {
		 echo "No data";}
		 
		
		 
		?>
		<br>
		<h5 style="text-align:center"><a  href="home.php">Go to home page</a></h5>
	</body>
	
	<footer id="footer" style="text-align:center">
			  <h5 >Design Internet System Solutions</h5>
	</footer>
</html>