<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $name = $_POST["Cname"];
    $customerID = $_POST["CustomerID"];
    $address = $_POST["Address"];

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

    // Insert data into the database
    $sql = "INSERT INTO customers (name, customer_id, address) 
            VALUES ('$name', '$customerID', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New customer added successfully";
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
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <title>WholeSaler-Login</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>


    <section id="body" class="width">
        <aside id="sidebar" class="column-left">

            <header>
                <h1><a href="#">WholeSaler</a></h1>
                <h2>The Complete Info</h2>
            </header>

            <nav id="mainnav">
                <ul>
                    <li class="selected-item"><a href="wholesaler.php">Home</a></li>
                    <li><a href="newtransaction.php">New Transaction</a></li>
                    <li><a href="addsupplier.php">Add Stocks</a></li>
                    <li><a href="updatingstocks.php">Print Bill</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>

        </aside>

        <section id="content" class="column-right">

            <article>
                <blockquote>
                    <p>The Bulk Vault</p>
                </blockquote>
                <p>&nbsp;</p>

                <!--IN THIS FIELD WE CAN ADD THE CUSTOMER..-->
                <fieldset>
                    <legend><strong>NEW CUSTOMER</strong></legend>
                    <form action="#" method="POST">
                        <p><label for="name"><strong>Name:</strong></label>
                            <input type="text" name="Cname" id="name" placeholder="Name" required>
                        </p>

                        <p><label for="CustomerID">Customer-ID:</label>
                            <input type="text" name="CustomerID" id="CustomerID" required>
                        </p>

                        <!-- <p><label for="LoginID">Login-ID:</label>
                            <input type="text" name="LoginID" id="LoginID" required></p> -->

                        <!-- <p><label for="password">Password:</label>
                            <input type="text" name="Password" id="password" required></p> -->

                        <p><label for="Address">Address:</label>
                            <textarea cols="60" rows="8" name="Address" id="Address" required></textarea>
                        </p>

                        <p><input type="submit" name="send" class="formbutton" value="Send"></p>
                    </form>
                </fieldset>

            </article>
            <br><br><br>
            <br><br><br>
            <footer class="clear">
                <p>&copy; WholeSale Business Management by Gowrav, Jithesh, and Deepak</p>
            </footer>

            <div class="clear"></div>

        </section>

    </section>

</body>

</html>