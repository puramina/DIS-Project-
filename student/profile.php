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
		
		$userEmail=$_SESSION['email'];
		
		$sql = "SELECT id, first_name, last_name, email FROM student WHERE email='$userEmail'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {

			 while($row = $result->fetch_assoc()) {
					 
				echo ("
						<div class='container-fluid' style='padding-top:30px;'>
							<div class='container-fluid'>
							<table  border=1 width='50%' style='text-align:center' align='center'>
								<tr>
									<td>ID Number</td>
									<td>$row[id]</td>
								</tr>
								<tr>
									<td>Name</td>
									<td>$row[first_name] $row[last_name]</td>
								</tr>
								
								<tr>
									<td>Email</td>
									<td>$row[email]</td>
								<tr>
									<td>Edit details</td>
									<td><a href='update_profile.php?id={$row["id"]}'>Edit Record</a></td>
								</tr>
							</table>
							</div>
						</div>");
				}
		} 
		else {
		 echo "0 results";}

		?>
		<br>
		
		<h5 style="text-align:center"><a  href="home.php">Go to home page</a></h5>
	</body>
	
	<footer id="footer" style="text-align:center">
			  <h5 >Design Internet System Solutions</h5>
	</footer>
</html>
