<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
   
<?php
/*include external files for connectivity to database and functionalities*/
include ('db_conn.php');
session_start();

/*Process login*/
if(isset($_POST['login'])){
	
	/*retrieve the credentials entered by the user*/
	$userEmail = $_POST['txtusername'];
	$userPass = $_POST['txtPass'];
	
	/*connect to the database*/
	include ('db_conn.php');
	
	/*query the student table*/
	$checkdata = "SELECT * FROM student, staff WHERE staff.email='$userEmail' AND staff.password='$userPass' OR student.email='$userEmail' AND student.password='$userPass'";
	$result = mysqli_query($conn,$checkdata);
	
	
	$check_data = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);

	if ($check_data == 0) {
		echo "<div class='form'><h3>'$userEmail' not registered /password is incorrect.</h3><br/></div>";
		
	} 
	else 
	{
		if ($userPass===$row["password"] and $id===$row["1"]) {
			$_SESSION['email'] = $userEmail;
			$_SESSION['password']=$userPass;
			$_SESSION['id'] = $userID;
			
			header ('Location:student/home.php'); //Redirect to home page
		} 
		elseif($userPass===$row["password"] and $id===$row["0"]) {
			$_SESSION['email'] = $userEmail;
			$_SESSION['password']=$userPass;
			$_SESSION['id'] = $userID;
			
				header ('Location:staff/home.php'); //Redirect to home page
		}
			else{
			echo "Incorrect password. Try again.";	
		}
	}
	
}//End of if statement
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



		<style>
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
		</style>
	</head>
	<body style='background-color:#f5f5f5;'>


		<form class="form-signin" name= "login-form" method="post" action="login.php">
			<div class="text-center mb-4">
				<img class="mb-4" src="image/logo.png" alt="Our logo" width="72" height="72">
				<h1 class="h3 mb-3 font-weight-normal">Login</h1>
			</div>

			<div class="form-label-group">
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="txtusername" required autofocus>
				<label for="inputEmail">Email address</label>
			</div>

			<div class="form-label-group">
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="txtPass" required>
				<label for="inputPassword">Password</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
			<a href="index.php" class="btn btn-lg btn-secondary btn-block" type="Cancel">Cancel</a>
			<p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2021</p>
		</form>
		
	</body>
	
<!--	<footer  id="footer" style="text-align:center">
		  <h5 >Design Internet System Solutions</h5>
	</footer> -->
			
</html>
