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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
		</style>
	</head>
	<body >		
		<!--Login form-->
			<div  style="float:right padding-top:20px; background-color:">
				
				<div style="text-align:center">
					<h2>Login </h2>					
					<form name= "login-form" method="post" action="login.php" >
						<div  style="padding-top:5px">
							<label><b>Email</b></label>
							<input type="text" placeholder="Your Email" name="txtusername" required/>

							<label><b>Password</b></label>
							<input type="password" placeholder="Your Password" name="txtPass" required/>
						</div>
						<div >
							<button type="submit" name="login">Login</button>
						<a href="index.php"><button type="button"  style="align: 20px"> Cancel </button></a></div>
							
					</form>				
				</div>
			</div><!--End ofLogin form-->
		
	</body>
	
	<footer  id="footer" style="text-align:center">
		  <h5 >Design Internet System Solutions</h5>
	</footer>
			
</html>
