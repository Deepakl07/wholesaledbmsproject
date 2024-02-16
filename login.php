<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (!empty($_POST["userid"]) && !empty($_POST["pass"])) {
        // Check if the provided username and password are valid (you should replace this with your own logic)
        $valid_username = "your_username";
        $valid_password = "your_password";

        if ($_POST["userid"] === $valid_username && $_POST["pass"] === $valid_password) {
            // If the username and password are valid, set session variables and redirect to a logged-in page
            $_SESSION["loggedin"] = true;
            // You can also store additional user information in session variables if needed
            // For example: $_SESSION["username"] = $_POST["userid"];
            header("location: logged_in_page.php");
            exit;
        } else {
            // If the username or password are not valid, show an error message
            $error_message = "Invalid username or password";
        }
    } else {
        // If either username or password is not provided, show an error message
        $error_message = "Please enter both username and password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page Wholesale</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="site__container">
        <div class="grid__container">
            <form action="#" method="post" class="form form--login">
              <h1 class="the">The Bulk Vault</h1>
                <div class="form__field">
                    <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
                    <input id="login__username" name="userid" type="text" class="form__input" placeholder="Username"
                        required>
                </div>

                <div class="form__field">
                    <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
                    <input id="login__password" name="pass" type="password" class="form__input" placeholder="Password"
                        required>
                </div>

                <div class="form__field">
                    <input type="submit" value="Sign In">
                </div>
            </form>

            <p class="text--center">Not a member? <a href="#">Sign up now</a> <span
                    class="fontawesome-arrow-right"></span></p>
        </div>
    </div>

</body>

</html>
