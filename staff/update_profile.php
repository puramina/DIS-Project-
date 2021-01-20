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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
</html>