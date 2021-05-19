<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: about_me.php");
    exit;
}

// Include config file
require_once "database_resume.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT `id`, `username`, `pwd` FROM `login` WHERE username = ?";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
        
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if ($password == $hashed_password) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: about_me.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Angella Marston Resume</title>
    <link rel="stylesheet" href="style_resume.css">
</head>
<section>
    <div class="helloBx">
        <h1>Hello! <br>I am Angella</h1>
        <p>Enter your login details and start journey with me</p>
    </div>
    <div class="contentBx">
        <div class="formBx">
            <h2>Login</h2>
            <?php
            if (!empty($login_err)) {
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>
            <form action="index_resume1.php" method="POST">
                <div class="inputBx">
                    <span>Username</span><br>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="inputBx">
                    <span>Password</span><br>
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    <input type="password" name="password">
                </div>
                <div class="inputBx">
                    <input type='submit' value="Sign in" name="">
                </div>
            </form>
        </div>
    </div>

</section>

<body>

</body>

</html>