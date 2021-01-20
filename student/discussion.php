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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <style type="text/css">
        #nobull {
            list-style-type: none;
        }

    </style>
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style='z-index: 1;'>
		<a class="navbar-brand" href="#">Welcome <?php  echo $_SESSION['email'];?></a>
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

	<div class="container-fluid">

	<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			  <div class="position-sticky pt-3">
				<ul class="nav flex-column">
				  <li class="nav-item" >
					<a class="nav-link active" aria-current="page" href="#">
					   Dashboard
					</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">
					  Course Contenet
					</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="discussion.php">
					  Discussions
					</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">
					 Assignemnts
					</a>
				  </li>			  
				</ul>		   
			  </div>
			</nav>
			
			
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style='padding-top:50px'>
			
				<h2>Discussions</h2>
				<div class="row">
					<div class="feature">
					  <h5 class="feature__title">
						Create Thread
						<p class="feature__text"> Message</p>
						
					  </h3>
				  </div>
				</div>
				
				<form action="disc_handle.php" method=POST>
						<div id="touch" class="touch">
						  <div class="container">
							<div class="row">
							  <div class="col-lg-12">
								<div class="touch__title">
								  TEXT
								  <div class="touch__text">
								   <textarea name="description" rows="15" cols="95" required></textarea>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					
						<div class="container">
							<div >
							  <div class="col-lg-12">
								
								<div >
								  <label for="msgAttachment_localBrowse">
								  </label>
								  
								  <p class="taskbuttondiv" id="bottom_submitButtonRow">
								  <input id="bottom_submitBtn" class="submit button-1" name="bottom_submitBtn" type="submit" role="button" value="Submit" >
									
								</div>
							  </div>
							</div>
						</div>
				</form>
				<br>
				<div class='container'>
				
				<?php
				
				$sql = "SELECT id, decp FROM discusson ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {

						 while($row = $result->fetch_assoc()) {
								 
							echo "<div class='row'>
						<div class='col'>
						<div class='media'>
							  <img class='mr-3' src='https://esportnow.pl/wp-content/uploads/2017/09/profile.png' width='50' height='50' alt='Generic placeholder image'>
							  <div class='media-body'>
								<h5 class='mt-0'>Anonymous</h5>"
						.$row["decp"].
					  "</div>
				</div></div></div>";
						}
					} 
					else {
					 echo "0 results";}
					 
				?>
				</div>
			</main>
			
		</div>	
		
	</div>	

<script>
function closeWin() {
  myWindow.close();   // Closes the new window
}	
</script>
</body>


</html>