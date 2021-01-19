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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body style="background-color: gray">

<div class="container-fluid">
<div class="card text-center shadow mb-5 bg-white rounded" style="margin: 20px">
	<div class="card-header">
		<h5 style="text-align:center"><a  href="home.php">Go to home page</a></h5>
	</div>
	<div class="card-body">
		<table class="table table-striped" border=2 width='50%' style="text-align:center" align="center">
			<tr style="font-size: 20px">
				<th>Course ID</th>
				<th>Course Name</th>
			</tr>
			<tr>
				<?php getCourse();?>
			</tr>
		</table>
	</div>
	<div class="card-footer text-muted">
		Design Internet System Solutions
	</div>
</div>
</div>


</body>

</html>
