<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->

<?php
/*include external files for connectivity to database and functionalities*/
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body style="background-color: gray">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style='z-index: 1;'>
    <a class="navbar-brand" href="#">Your Grades</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php" >Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="coursestaken.php" >Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="grades.php" >Grades</a>
            </li>
        </ul>


        <a href="../index.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>

    </div>
</nav>

<div class="container-fluid" style='padding-top:25px'>
	<div class="card text-center shadow mb-5 bg-white rounded" style="margin: 20px">
		<!--div class="card-header">
			<h5 style="text-align:center"><a  href="home.php">Go to home page</a></h5>
		</div-->
		<div class="card-body">
			<table class='table table-striped' border=2 width='50%' style="text-align:center" align="center">
				<tr style="font-size: 15px">
					<th>Course ID</th>
					<th>Course Name</th>
					<th>Mark</th>
					<th>Grades</th>
				</tr>
				<tr>
					<?php 
					$userEmail=$_SESSION['email'];
					
					$get_courses = "SELECT * FROM student, enrolment, course, courseoffering WHERE student.email='$userEmail' AND student.id=enrolment.studentID AND enrolment.courseofferID=courseoffering.id AND courseoffering.courseID=course.id";
	
					$Results = mysqli_query($conn,$get_courses);
					
					while($row=mysqli_fetch_array($Results)){
						
						$courseid=$row['courseofferID'];
						$name=$row['name'];
						$mark=$row['mark'];
						$grade=$row['grade'];
						
						echo("	
								<tr> 
									<td>$name</td> 
									<td>$courseid</td>
									<td>$mark</td>
									<td>$grade</td>
								</tr>
								");
					}
								?>
					
					
				</tr>
			</table>
		</div>
		<div class="card-footer text-muted">
			Design Internet System Solutions
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

</html>
