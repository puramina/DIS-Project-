<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
 
<?php
/*include external files for connectivity to database and functionalities */
$conn=mysqli_connect("localhost","root","","studentmanagementsys");
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
		<style type="text/css">
		#nobull {
			list-style-type: none;
		}
		
		</style>
	</head>

	<header >
			<div style="padding-top:10px; padding-left:10px;  font-size: 20px">Welcome <br><?php  echo $_SESSION['email'];?></div>
			<a class="nav" style="float:right; padding-top:30px; padding-right:10px; font-size: 20px" href="../index.php" >[Logout]</a>
				
	</header>
	
	<body>
		<div class="container-fluid container" >
			<div class="sidebar" >
				<div class="board" >
					<h4 style="font-size: 25px">Dashboard </h4>
					<li id="nobull"><a href="profile.php" style="font-size: 20px"> Profile</a></li><br>
					<li id="nobull"><a href="coursestaken.php" style="font-size: 20px"> Courses </a></li><br>
					<li id="nobull"><a href="grades.php" style="font-size: 20px"> Grades</a></li><br>
				</div>
			</div>						
		</div>
		
		
	</body>
	 
	<footer id="footer" style="text-align:center">
		  <h5 >Design Internet System Solutions</h5>
	</footer>
</html>
