<?php
error_reporting(0);
include("connection.php");
$fn=$_GET['fname'];
$ln=$_GET['lname'];
$dis=$_GET['district'];
$datefrom=$_GET['from'];
$dateto=$_GET['to'];
$des=$_GET['des'];
$targetDir = "uploads/";
$fileName = basename($_FILES["fileinput"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	$query="INSERT INTO min_report VALUES('$dis','$fn','$ln','$from','$to','$des')";
	$data=mysqli_query($conn,$query);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $db->query("INSERT into files_coun (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            }
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
.logincontainer {  
    padding: 50px;  
  background-color: lightblue;  
}
</style>
	<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
		<h2 class="text-center">Monthly report of Councillors</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="index.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" placeholder="Enter your first name" name="fname" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lname" placeholder="Enter your last name" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Date From</label>
				<input type="date" name="from" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Date To</label>
				<input type="date" name="to" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>District's Group</label>
				<select name="district">
					<option value="A">A</option>  
					<option value="B">B</option>  
					<option value="C">C</option>  
					<option value="D">D</option>  
					<option value="E">E</option>  
					<option value="F">F</option>  
					<option value="G">G</option>  
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" placeholder="Enter complete description of servies offered at each portfolios" name="des">	
				</textarea>
			</div>
			<div class="form-group">
				<label>Document</label>
				<input type="file" name="fileinput" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
			<label>Targetted to</label>
				<select name="target">  
					<option value="Minister">Chief Minister</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>	
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
