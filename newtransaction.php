<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Retrieve form data
	$name = $_POST["name"];
	$customerID = $_POST["CustomerID"];
	$stockID = $_POST["StockID"];
	$quantity = $_POST["Quantity"];
	$totalAmount = $_POST["TotalAmount"];
	$date = $_POST["Date"];

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
	$sql = "INSERT INTO transactions (name, customer_id, stock_id, quantity, total_amount, transaction_date) 
            VALUES ('$name', '$customerID', '$stockID', '$quantity', '$totalAmount', '$date')";

	if ($conn->query($sql) === TRUE) {
		echo "New transaction added successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close the database connection
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
					<li><a href="wholesaler.php">Home</a></li>
					<li class="selected-item"><a href="newtransaction.php">New Transaction</a></li>
					<li><a href="updatingstocks.php">Print-Bill</a></li>
					<li><a href="addsupplier.php">Add Stocks</a></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</nav>



		</aside>

		<section id="content" class="column-right">

			<article>
				<p>
				<table>
					<thead>
						<tr>
							<th>Product ID</th>
							<th>Product Name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>001</td>
							<td>Product A</td>
						</tr>
						<tr>
							<td>002</td>
							<td>Product B</td>
						</tr>
						<tr>
							<td>003</td>
							<td>Product C</td>
						</tr>
						<tr>
							<td>004</td>
							<td>Product D</td>
						</tr>
						<tr>
							<td>005</td>
							<td>Product E</td>
						</tr>

						<!-- Add more rows as needed -->
					</tbody>
				</table>
				</p>

				<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
				<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
				<fieldset>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
					<legend><strong>NEW TRANSACTION</strong></legend>
					<form action="" method="POST">
						<p><label for="name"><strong>Name:</strong></label>
							<input type="text" name="name" id="name" Placeholder="Customer Name" required /><b />
						</p>

						<p><label for="CustomerID">Customer-ID:</label>
							<input type="text" name="CustomerID" id="CustomerID" Placeholder="CustomerID" required /><br />
						</p>

						<p><label for="StockID">Product-ID:</label>
							<input type="text" name="StockID" id="StockID" Placeholder="Stock ID" required /><br />
						</p>

						<p><label for="Quantity">Quantiy:</label>
							<input type="text" name="Quantity" id="Quantity" Placeholder="How Much??" required /><br />
						</p>

						<p><label for="TotalAmount">Total-Amount:</label>
							<input name="TotalAmount" id="TotalAmount" required></input><br />
						</p>

						<!-- <p><label for="AmountPaid">Amount-Paid:</label>	
						<input name="AmountPaid" id="AmountPaid" required></input><br /></p>
						
						<p><label for="BalanceAmount">Balance-Amount:</label>	
						<input name="BalanceAmount" id="BalanceAmount" required></input><br /></p> -->
						<p><label for="Date">Date:</label>
							<input type="date" name="Date" id="Date" value="" required /><br />
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