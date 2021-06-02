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
<style>
.center{
display: block;
margin-left: auto;
margin-right: auto;
width: 10%;
height: 10%;
}
<style>
table, th, td {
  border: 1px solid black;
}
</style>
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
<br><br><br>
<img src="images/2.jpg" class="center" alt="Durbin Technologies">
<br><br><br>
<h1 class="text-center">All the protfolio details are shown here</h1>
<table>
<tr>
<th>District</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Date from</th>
<th>Date to</th>
<th>Description</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "Durbin_app");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT district, fname, lname, from, to, des FROM rawdata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["district"]. "</td><td>" . $row["fname"] . "</td><td>". $row["lname"]. "</td></td>". $row["from"]. "</td></td>". $row["to"]. "</td></td>". $row["des"]. "</td></tr>"
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
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
