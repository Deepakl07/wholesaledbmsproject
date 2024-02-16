<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Retrieve form data
	$cname = $_POST["Cname"];
	$customerID = $_POST["CustomerID"];
	$address = $_POST["Address"];

	// Connect to MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "WMA";
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check the connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Insert data into the database
	$sql = "INSERT INTO customers (name, customer_id, address) VALUES ('$cname', '$customerID', '$address')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the database connection
	$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
	<section id="content" class="column-right">

		<article>

			<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
			<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
			<fieldset>
				<!--YOU NEED TO WRITE AN ACTION HERE...-->
				<!--NEVER USE KEY WORDS AS THE VARIABLES AND NAMES... -->
				<legend><strong>NEW CUSTOMER</strong></legend>
				<form action="" method="POST">
					<p><label for="name"><strong>Name:</strong></label>
						<input type="text" name="Cname" id="name" placeholder="Name" required />
					</p>b></p>

					<p><label for="CustomerID">Customer-ID:</label>
						<input type="text" name="CustomerID" id="CustomerID" required /><br />
					</p>

					<p><label for="Address">Address:</label>
						<textarea cols="60" rows="8" name="Address" id="Address" required></textarea><br />
					</p>

					<p><input type="submit" name="send" class="formbutton" value="Send" /></p>
				</form>

			</fieldset>

		</article>

	</section>

	<div class="clear"></div>

	</section>
</body>

</html>