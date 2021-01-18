<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
   
<?php
/*include external files for connectivity to database and functionalities*/
include('../db_conn.php');
include('course_list.php');
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
		<div class="container-fluid" style="padding-top:30px;">
			<table border=2 width='50%' style="text-align:center" align="center">
				<tr style="font-size: 20px">
					<th>Course ID</th>
					<th>Course Name</th>
				</tr>
				<tr>
					<?php getCourse();?>
				</tr>
			</table>
		</div>
		
		<h5 style="text-align:center"><a  href="home.php">Go to home page</a></h5>
	</body>
	
	<footer id="footer" style="text-align:center">
			  <h5 >Design Internet System Solutions</h5>
	</footer>
</html>
