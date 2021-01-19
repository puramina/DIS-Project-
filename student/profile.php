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


<div class="container emp-profile">
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
                                <a class='btn btn-info' href='update_profile.php?id={$row["id"]}'>Edit details</a>
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
</body>

<!--<footer id="footer" style="text-align:center">
          <h5 >Design Internet System Solutions</h5>
</footer>-->
</html>
