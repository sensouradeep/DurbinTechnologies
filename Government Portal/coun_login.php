<!DOCTYPE html>
<?php
include("connection.php");
error_reporting(0);
if(!empty($_POST['save'])){
	$uname=$_POST['uniqueid'];
	$pass=$_POST['passw'];
	$error="";
	$success="";
	$query="select * from clogin where username='$uname' and password='$pass'";
	$data=mysqli_query($conn,$query);
	$count=mysqli_num_rows($data);
	if($count>0)
	{
		echo "Login Successful!";
	}
	else{
		echo "Login Unsuccessful!";
	}
		
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
.logincontainer {  
    padding: 50px;  
  background-color: lightblue;  
} 
</style>

</head>
<body style="background-color:#d0bdf4;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Durbin Technologies</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Admin Login</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servies Offered at Durbin Technologies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Consultancy</a>
          <a class="dropdown-item" href="#">Shares and Market</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Product-Based Deliveries</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://durbin.live/">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Councillors are requested to login below</h1>
	</div>
</section>
<section class="my-5">
<div class="logincontainer">
	<div class="py-5">
		<h2 class="text-center">Enter your details</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="coun_report.php" method="post">
			<div class="form-group">
				<label>Enter your Unique ID</label>
				<input type="text" name="uniqueid" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" name="passw" autocomplete="off" class="form-control">
			</div>
			<button type="submit" name="save" class="btn btn-success">Submit</button>	
		</form>
	</div>
</section>
<footer class="text-center">
	<b>Twitter handle:</b> @djsouradeep <b>Instagram handle:</b> @sen_souradeep <b>Facebook handle:</b>chestersoura
	<p>
		<i>Created by: Souradeep Sen</i> 
	</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
