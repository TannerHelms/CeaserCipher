<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
		<title>Full Stack Tanner H</title>

		<!-- CSS -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
		<link rel="stylesheet" type="text/css" href="css/balls.css">

		<!--  JQuery -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/forms.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
		<style>
			body {
				background-image: url(" images/wood1.jpg");
			}
		</style>
	</head>

	<body>
<div id="fullbody">
<div id="circleball" class="container ">
<!--<div id="circleball" class="container ">  -->
		 	<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
</div>
<div id="circleball1" class="container ">
<!--<div id="circleball" class="container ">  -->
		 	<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
</div>
		<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
			<button id="hellos" class="w3-bar-item w3-button w3-large" onclick="w3_close()">
				Close &times;
			</button>

			<a href="http://192.168.1.100/a1mrm" class="w3-bar-item w3-button">Mr M Demo</a>

			<a href="http://192.168.1.102/a1gavinb" class="w3-bar-item w3-button">Gavin B</a>
			<a href="http://192.168.1.103/a1jpm" class="w3-bar-item w3-button">Joseph Mu</a>
			<a href="http://192.168.1.104/a1zacharys" class="w3-bar-item w3-button">Zachary S</a>

			<a href="http://192.168.1.105/a1bryanh" class="w3-bar-item w3-button">Bryan H</a>
			<a href="http://192.168.1.106/a1josephm" class="w3-bar-item w3-button">Joseph Mo</a>
			<a href="http://192.168.1.107/a1kenisons" class="w3-bar-item w3-button">Kenison S</a>

			<a href="http://192.168.1.109/a1chases" class="w3-bar-item w3-button">Chase S</a>
			<a href="http://192.168.1.110/a1davidb" class="w3-bar-item w3-button">David B</a>
			<a href="http://192.168.1.111/a1connorc" class="w3-bar-item w3-button">Connor C</a>

			<a href="http://192.168.1.114/a1peterc" class="w3-bar-item w3-button">Peter C</a>
			<a href="http://192.168.1.115/a1andrewh" class="w3-bar-item w3-button">Andrew H</a>

			<a href="http://192.168.1.117/a1jamesr" class="w3-bar-item w3-button">James R</a>
			<a href="http://192.168.1.118/a1alysec" class="w3-bar-item w3-button">Alyse C</a>
			<a href="http://192.168.1.119/a1hunterf" class="w3-bar-item w3-button">Hunter F</a>
			<a href="http://192.168.1.120/a1michaelc" class="w3-bar-item w3-button">Michael C</a>

			<a href="http://192.168.1.121/a1heathers" class="w3-bar-item w3-button">Heather S</a>
			<a href="http://192.168.1.122/a1briellel" class="w3-bar-item w3-button">Brielle L</a>
			<a href="http://192.168.1.123/a1tannerh" class="w3-bar-item w3-button">Tanner H</a>
			<a href="http://192.168.1.124/a1richardm" class="w3-bar-item w3-button">Richard M</a>
		</div>
		<div>
			<button class="w3-button w3-red w3-xxlarge" onclick="w3_open()">
				&#9776;
			</button>
		</div>
		
		<h1 id="topH1">Yeah! We are starting *FULL STACK* !!!</h1>
		<h2>Created by tanner Helms/ period A1 </h2>
		<h3>Started 03 Nov 2017</h3>

		<hr>

		<h4 id="a1">... Click to reveal one of my FAV pics! ...</h4><h4 id="a2" onclick="animationFunction()">... Click to start/stop some cool animation i made! ...</h4>

		<hr>
		<img id="F14" src="images/F14.jpg" alt="F14">
		<hr>
		<h4>
		<?php
		include "php/makeTable.php";
	    ?>
		</h4>
		<br>

		<br>
		<hr>
		<br>
		<br>
		<div id="theform">
			<div class="container ">
<!--<div id="circleball" class="container ">  -->
		 	<div class="ball middle right"></div>
			<div class="ball middle right"></div>
			<div class="ball middle right"></div>
			<div class="ball middle right"></div>
			<div class="ball middle right"></div>
			<div class="ball middle right"></div>
			<div class="ball middle right"></div>
		<hr>
		<form id="NameEmailForm" action="php/addRecords.php" method="post">
			
			<h4 id="a1"> First Name: </h4>
			<br>
			<input type="text" name="firstname">
			<br>
			<h4 id="a1"> Last Name: </h4>
			<br>
			<input type="text" name="lastname">
			<br>
			<h4 id="a1"> E-mail: </h4>
			<br>
			<input type="text" name="email">
			<br>
			<br>
			<input id="click" type="submit">
			<input id="click" type="button" onclick="clearForm()" value="Clear form">
		</form>
	

		<hr>
		</div>

		<h1>Retrieve Data from our Data Base</h1>


<h4>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBa1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</h4>



<br>
<h1>Retrieve Data from our Data Base - Place in an HTML Table</h1>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBa1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<br><br><br><hr><br><br><br>

		<script>
			function clearForm() {
				document.getElementById("NameEmailForm").reset();
			}
		</script>

		<script>
			function w3_open() {
				document.getElementById("mySidebar").style.display = "block";
			}

			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		</div>
	</body>

</html>