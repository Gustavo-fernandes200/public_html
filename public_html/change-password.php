<?php
// Include config file
require_once "config.php";

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Define variables and initialize with empty values
$current_password = $new_password = $confirm_new_password = "";
$current_password_err = $new_password_err = $confirm_new_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate current password
    if (empty(trim($_POST["current_password"]))) {
        $current_password_err = "Please enter your current password.";
    } else {
        $current_password = trim($_POST["current_password"]);
    }

    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Password must have at least 6 characters.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm new password
    if (empty(trim($_POST["confirm_new_password"]))) {
        $confirm_new_password_err = "Please confirm the new password.";
    } else {
        $confirm_new_password = trim($_POST["confirm_new_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_new_password)) {
            $confirm_new_password_err = "Password confirmation does not match.";
        }
    }

    // Check input errors before updating the password
    if (empty($current_password_err) && empty($new_password_err) && empty($confirm_new_password_err)) {
        // Prepare a select statement to get the current password from the database
        $sql = "SELECT password FROM users WHERE id = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $_SESSION["id"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if the user exists
                if ($stmt->num_rows == 1) {
                    // Bind the result to variables
                    $stmt->bind_result($hashed_password);

                    if ($stmt->fetch()) {
                        // Verify the current password
                        if (password_verify($current_password, $hashed_password)) {
                            // Update the password in the database
                            $update_sql = "UPDATE users SET password = ? WHERE id = ?";

                            if ($update_stmt = $mysqli->prepare($update_sql)) {
                                // Bind variables to the prepared statement as parameters
                                $update_stmt->bind_param("si", $param_password, $_SESSION["id"]);

                                // Hash the new password
                                $param_password = password_hash($new_password, PASSWORD_DEFAULT);

                                // Attempt to execute the prepared statement
                                if ($update_stmt->execute()) {
                                    // Password updated successfully
                                    header("location: login.php");
                                    exit;
                                } else {
                                    echo "Oops! Something went wrong. Please try again later.";
                                }

                                // Close statement
                                $update_stmt->close();
                            }
                        } else {
                            $current_password_err = "Current password is incorrect.";
                        }
                    }
                } else {
                    // User not found
                    header("location: logout.php");
                    exit;
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class = "card o-hidden border-0 shadow-lg my-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class = "p-5">
                                    <div class="wrapper">
                                        <p>Please fill out this form to reset your password.</p>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Submit">
                                                <a class="btn btn-link ml-2" href="login.php"></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

