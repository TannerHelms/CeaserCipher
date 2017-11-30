<?php
		$servername = "localhost";
		$username = "root";
		$password = "toor";
		$dbname = "myDB_a1_15Nov";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn -> connect_error) {
			die("<br>Connection failed (4 parm): " . $conn -> connect_error . "<br>");
		}

		echo "<br>Connection sucessful<br>";

		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

		if ($conn -> query($sql) === TRUE) {
			echo "<br>Table MyGuests created successfully<br>";
		} else {
			echo "Error creating table: " . $conn -> error . "<br>";
		}

		$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

		if ($conn -> query($sql) === TRUE) {
			echo "<br>values inserted correctly<br>";
		} else {
			echo "Error values: " . $conn -> error . "<br>";
		}

		
		$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		
		
		
		
		
		
		
		$conn -> close();

		?>