<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $customerID = $_POST["CustomerID"];

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WMA"; // Assuming this is your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve data from the database based on customer ID
    $sql = "SELECT * FROM transactions WHERE customer_id = '$customerID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Transaction ID: " . $row["transaction_id"]. "<br>";
            echo "Customer ID: " . $row["customer_id"]. "<br>";
            echo "Stock ID: " . $row["stock_id"]. "<br>";
            echo "Quantity: " . $row["quantity"]. "<br>";
            echo "Total Amount: " . $row["total_amount"]. "<br>";
            echo "Transaction Date: " . $row["transaction_date"]. "<br><br>";
        }
    } else {
        echo "No transactions found for the provided customer ID";
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
                            		<li> <a href="wholesaler.php">Home</a></li>
									<li> <a href="newtransaction.php">New Transaction</a></li>
									<li> <a href="addsupplier.php">Add Stocks</a></li>
                            		<li class="selected-item"> <a href="updatingstocks.php">Print BiLL</a></li>
                            	

									<li><a href="login.php">Logout</a></li>
                </ul>
			</nav>



			</aside>

		<section id="content" class="column-right">

	    <article>

		<blockquote><p>The Bulk Vault</p></blockquote>
		<p>&nbsp;</p>

		<!--	<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a> -->
		<!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
		<fieldset>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
				<legend><strong>Print-Bill</strong></legend>
					<form action="" method="post">

						<p><label for="StockID">Customer-ID:</label>
						<input type="text" name="StockID" id="StockID" value="" required/><br /></p>

						<!-- <p><label for="Quantity">Quantiy:</label>
						<input type="text" name="Quantity" id="Quantity" value="" required/><br /></p>

						<p><label for="Price">Price-Per-Unit:</label>
						<input type="text" name="Price" id="Price" value="" required/><br /></p>

						<p><label for="Date">Expiry-Date:</label>
						<input type="text" name="Date" id="Date" value="" required/><br /></p> -->

						<p><input type="submit" name="send" class="formbutton" value="Send" /></p>

					</form>


		</fieldset>
		<br> <br> <br> <br> <br> <br> <br><br><br><br>
	
		</article>

			<footer class="clear">
				<p>&copy; WholeSale Business Managment by Gowrav,Jithesh and Deepak</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>
</html>