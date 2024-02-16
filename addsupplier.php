<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["Name"]; // Update to match the name attribute in the form
	$industryID = $_POST["IndustryID"]; // Update to match the name attribute in the form
	$stockID = $_POST["StockID"]; // Update to match the name attribute in the form
	$address = $_POST["Address"]; // Update to match the name attribute in the form
	$quantity1 = $_POST["Quantity1"]; // Update to match the name attribute in the form

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "WMA";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO suppliers (name, industry_id, stock_id, address, quantity) 
            VALUES ('$name', '$industryID', '$stockID', '$address', '$quantity1')";

	if ($conn->query($sql) === TRUE) {
		echo "New supplier added successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>


<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>WholeSaler-Login</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

	<section id="body" class="width">
		<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="#">WholeSaler</a></h1>

				<h2>The Complete Info</h2>

			</header>
			<!--THE LEFT SIDE MENU IS DUE TO THE ABOVE CODE...!!-->
			<nav id="mainnav">
				<ul>
					<li> <a href="wholesaler.php">Home</a></li>
					<li> <a href="newtransaction.php">New Transaction</a></li>

					<li class="selected-item"> <a href="addsupplier.php">Add Stocks</a></li>
					<li> <a href="updatingstocks.php">Print Bill</a></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</nav>



		</aside>

		<section id="content" class="column-right">

			<article>

				<blockquote>
					<p> The Bulk Vault</p>
				</blockquote>
				<p>&nbsp;</p>

				<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
				<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
				<fieldset>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
					<legend><strong>NEW Supplier</strong></legend>
					<form action="" method="Post">

						<p><label for="Name">Supplier-Name:</label>
							<input name="Name" id="Name" required></input><br />
						</p>

						<p><label for="IndustryID">Supplier-ID:</label>
							<input type="text" name="IndustryID" id="IndustryID" value="" required /><br />
						</p>

						<p><label for="StockID">Product-ID:</label>
							<input type="text" name="StockID" id="StockID" value="" required /><br />
						</p>

						<p><label for="Address">Address:</label>
							<textarea cols="60" rows="8" name="Address" id="Address"></textarea><br />
						</p>
						<p><label for="Quantity1">Quantiy:</label>
							<input type="text" name="Quantity1" id="Quantity1" value="" /><br />
						</p>
						<p><input type="submit" name="send" class="formbutton" value="Send" /></p>


					</form>


				</fieldset>

			</article>





			<footer class="clear">
				<p>&copy; WholeSale Business Managment by Gowrav,Jithesh and Deepak</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>

</html>