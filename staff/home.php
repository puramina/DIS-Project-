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
		<title>VU WZIS </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="icon" href="care.ico">
		<style></style>
	</head>

	<!--------------------------Main Top Navigation bar------------------------>
	<header class="nav" id="myTopnav">
			<!--Top links-->
			
			<a href="home.php"><div style="padding-top:10px; font-size: 20px">Welcome <?php global $conn; echo $_SESSION['email'];?></div></a>
			<a class="nav" style="float:right; padding-top:30px; padding-right:10px; font-size: 20px" href="../index.php" >[Logout]</a>
				
	</header>
	
	<body>
		<div class="row" >
			<div class="sidebar" >
				<div class="board" >
					<h4 style="font-size: 25px">Dashboard </h4>
					<li><a href="profile.php" style="font-size: 20px"> Profile</a></li><br>
					<li><a href="coursestaken.php" style="font-size: 20px"> Courses </a></li><br>
					<li><a href="grades.php" style="font-size: 20px"> Grades</a></li><br>
					<!--style="background-color: orange"--
					<a ><div id="icon" href="javascript:void(0);" style="position:right;" class="icon" onclick="topNavFunc()">&#9776;</div></a>> 
					<!--li><a href="profile.php" style="font-size: 20px"><i><img src="../image/dashboard.png"></i> Profile</a></li><br>
					<li><a href="coursestaken.php" style="font-size: 20px"><i><img src="../image/schedule.png"></i> Courses </a></li><br>
					<li><a href="grades.php" style="font-size: 20px"><i><img src="../image/grade.png"></i>  Grades</a></li><br-->
				</div>
			</div>
			
						
		</div>
		
		<script>
			//Dropdown Effect for small screen devices
			function topNavFunc() {
				var x = document.getElementById("myTopnav");
				if (x.className === "nav") {
					x.className += " responsive";
				} else {
					x.className = "nav";
				}
			}
			
		</script>
	</body>
	
	<!-- footer-->
	<footer>
		<div class="footer">
		  <h4>Design Internet System Solutions</h4>
		</div>
	</footer>
</html>
