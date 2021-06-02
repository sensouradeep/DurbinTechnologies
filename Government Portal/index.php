<?php
error_reporting(0);
include("connection.php");
$nm=$_GET['Name'];
$add=$_GET['Address'];
$em=$_GET['Email ID'];
$phn=$_GET['Phone number'];
$com=$_GET['comments'];
if(isset($_POST["submit"])){
$query="INSERT INTO common VALUES('$nm','$add','$em','$phn','$com')";
$data=mysqli_query($conn,$query);
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>PM Modi addressing the Nation</h3>
        <p>NaMo fighting against the COVID-19 cases</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>PM Modi afer winning elections</h3>
        <p>Whole Nation is with Narendra Modi</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Cabinet Meeting</h3>
        <p>High Officials are taking part in the meeting</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Welcome to Government Portal of Data Collection</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/govt.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-5">Structure of Government</h2>
				<p class="py-5">
					Modelled after the Westminster system for governing the state, the Union government is mainly composed of the executive, the legislature, and the judiciary, in which all powers are vested by the constitution in the prime minister, parliament and the supreme court. The president of India is the head of state and the commander-in-chief of the Indian Armed Forces whilst the elected prime minister acts as the head of the executive, and is responsible for running the Union government. The parliament is bicameral in nature, with the Lok Sabha being the lower house, and the Rajya Sabha the upper house. The judiciary systematically contains an apex supreme court, 24 high courts, and several district courts, all inferior to the supreme court.The basic civil and criminal laws governing the citizens of India are set down in major parliamentary legislation, such as the civil procedure code, the penal code, and the criminal procedure code. Similar to the Union government, individual State governments each consist of executive, legislative and judiciary. The legal system as applicable to the Union and individual State governments is based on the English Common and Statutory Law. The full name of the country is the Republic of India. India and Bharat are equally official short names for the Republic of India in the Constitution, and both names appears on legal banknotes, in treaties and in legal cases. The terms "Union government", "Central government" and "Bhārat Sarkār" are often used officially and unofficially to refer to the Government of India.[citation needed] The term New Delhi is commonly used as a metonym for the Union government,[citation needed] as the seat of the government is in New Delhi.
				</p>
				<p class="py-4">
					The executive power is vested mainly in the President of India, as per Article 53(1) of the constitution. The president has all constitutional powers and exercises them directly or through subordinate officers as per the aforesaid Article 53(1). The president is to act in accordance with aid and advice tendered by the Prime Minister, who leads the Council of Ministers as described in Article 74 of the Constitution.
				</p>
				<a href="https://durbin.live/" class="btn btn-success">Want to know me more?</a>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  				<img class="card-img-top" src="images/coun.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">Data Input for Councillors</h4>
    					<p class="card-text">Respective Councillors are requested to Login by Clicking below</p>
    					<a href="coun_login.php" class="btn btn-primary">Login</a>
  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  				<img class="card-img-top" src="images/min.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">Data Input for Ministers</h4>
    					<p class="card-text">Respective Ministers are requested to Login by Clicking below</p>
    					<a href="min_login.php" class="btn btn-primary">Login</a>
  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  				<img class="card-img-top" src="images/chief.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">Data Input for Chief Ministers</h4>
    					<p class="card-text">Respective Chief Ministers are requested to Login by Clicking below</p>
    					<a href="chief_login.php" class="btn btn-primary">Login</a>
  					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us and We will get back to you! </h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="Name" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="Address" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email ID</label>
				<input type="text" name="Email ID" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" name="Phone Number" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments">	
				</textarea>
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
