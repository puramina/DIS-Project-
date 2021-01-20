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
    <link rel="stylesheet" href="css/styleProfile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style='z-index: '>
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

<div class="container emp-profile" style='padding-top:25px'>
    <form method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="https://esportnow.pl/wp-content/uploads/2017/09/profile.png" width="250" height="250"  alt=""/>

                </div>
            </div>
            <div class="col-md-7">
                <div class="profile-head">

                    <?php

					$userEmail=$_SESSION['email'];

					$sqlName = "SELECT first_name, last_name FROM student WHERE email='$userEmail'";
					$resultName = $conn->query($sqlName);
								if ($resultName->num_rows > 0) {

                    while($rowName = $resultName->fetch_assoc()) {

                    echo ("
                    <h5>$rowName[first_name] $rowName[last_name]</h5>
                    ");
                    }
                    }
                    else {
                    echo "Not Found 404";}

                    ?>
                    <h6>
                        Student
                    </h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">

                <a class="btn btn-secondary" href="home.php">Go to home page</a>
				

            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <!--<div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>
                </div>-->
            </div>
            <div class="col-md-8">

                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <?php

		$userEmail=$_SESSION['email'];

		$sql = "SELECT id, first_name, last_name, email, gender, age, dateofbirth, nationality, postalAddress FROM student WHERE email='$userEmail'";
		$result = $conn->query($sql);
                        if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) {

                        echo ("
                        <div class='row'>
                            <div class='col-md-6'>
                                <label>User Id</label>
                            </div>
                            <div class='col-md-6'>
                                <p>$row[id]</p>
                            </div>
                        </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Name</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[first_name] $row[last_name]</p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Email</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[email]</p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Gender</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[gender] </p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Age</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[age] </p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Date of birth</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[dateofbirth] </p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Nationality</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[nationality] </p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label>Postal code</label>
                                </div>
                                <div class='col-md-6'>
                                    <p>$row[postalAddress] </p>
                                </div>
                            </div>
                            <div class='row'>

                                <button style ='margin: 10px;' type='button' class='btn btn-success card-link' data-toggle='modal' data-target='#myModalchange'>Edit details</button>
								<a class='btn btn-info' href='delete_handle.php?action=delete&id=".$row['id']."'>delete</a>
                            </div>

                        </div>
                    </div>");
                    }
                    }
                    else {
                    echo "Not Found";}

                    ?>


                </div>

            </div>
        </div>
</div>
</form>
</div>

<div class="modal" id="myModalchange">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="update_profile.php" method=POST>

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Change info</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	   <div class="form-group">
			<label for="exampleFormControlSelect1">id</label>
			<select class="form-control" name="id" id="exampleFormControlSelect1">
				<?php

				$result = $conn->query($sql);

				if($result->num_rows >0) {
					while($row = $result->fetch_assoc()) {
						echo "<option>". $row["id"]. "</option>";
						}
				}else{
					echo "0 result";
				}

				$conn->close();


				?>
			</select>
		</div>
		<label for="firstname">Firstname:</label>
         <input name="firstname" class="form-control" type="text">
		<label for="lastname">Lastname:</label>
		 <input name="lastname" class="form-control" type="text">
		<label for="email ">Email:</label>
		 <input name="email"  class="form-control" type="email">
		 <label for="gender">Gender:</label>
         <input name="gender" class="form-control" type="text">
		<label for="age">Age:</label>
		 <input name="age" class="form-control" type="number">
		<label for="dateofbirth">Date of birth:</label>
		 <input name="dateofbirth" class="form-control" type="date">
		 <label for="nationality">Nationality:</label>
         <input name="nationality" class="form-control" type="text">
		<label for="postalAddress">Postal code:</label>
		 <input name="postalAddress" class="form-control" type="number">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
	</form>
    </div>
  </div>
</div>
</body>

<!--<footer id="footer" style="text-align:center">
          <h5 >Design Internet System Solutions</h5>
</footer>-->
</html>
