<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
   
<?php
/*include external files for connectivity to database and functionalities*/
include('db_conn.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>VU WSIZ</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/cover.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	



	<body class="text-center">


    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand" style='color:white'>Virtual University</h3>
          <nav class="nav nav-masthead justify-content-center">
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading" style='color:white'>Virtual University.</h1>
        <p class="lead" style='color:white'>Login as Staff or Student to access University resources.</p>
        <p class="lead">
          <a class="btn btn-lg btn-secondary" href="login.php">Login</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p></p>
        </div>
      </footer>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  </body>

</html>
