		<?php
		$servername = "localhost";
		$username = "root";
		$password = "toor";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn -> connect_error) {
			die("<br>Connection failed: " . $conn -> connect_error . "<br>");
		}
		echo "<br>Connected successfully<br>";

		// Create database
		$sql = "DROP DATABASE IF EXISTS DBa1";
		if ($conn -> query($sql) === TRUE) {
			echo "Database dropped successfully<br>";
		} else {
			echo "<br>Error dropping database: " . $conn -> error . "<br>";
		}

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS DBa1";
		if ($conn -> query($sql) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "<br>Error creating database: " . $conn -> error . "<br>";
		}

		$conn -> close();
		?>

		