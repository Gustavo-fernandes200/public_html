<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$username = $name = $email = $password = $telephone = "";

$username_err = $name_err = $email_err = $password_err = $telephone_err = "";
 
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Validate username

    $input_username = trim($_POST["username"]);

    if(empty($input_username))
    {
        $username_err = "Please enter a username.";

    } else
    {
        $username = $input_username;
    }

    // Validate name

    $input_name = trim($_POST["name"]);

    if(empty($input_name))
    {
        $name_err = "Please enter a name.";

    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
    {
        $name_err = "Please enter a valid name.";

    } else{
        $name = $input_name;
    }
    
    // Validate email

    $input_email = trim($_POST["email"]);

    if(empty($input_email))
    {
        $email_err = "Please enter an email.";  

    } elseif(!filter_var($input_email, FILTER_VALIDATE_EMAIL))
    {
        $email_err = "Please enter a valid email address.";

    } else
    {
        $email = $input_email;
    }

    // Validate password

    $input_password = trim($_POST["password"]);

    if(empty($input_password))
    {
        $password_err = "Please enter a password.";     

    } else{

        $password = $input_password;
    }

    // Validate telephone

    $input_telephone = trim($_POST["telephone"]);

    if(empty($input_telephone))
    {
        $telephone_err = "Please enter a telephone number.";  

    } else
    {
        $telephone = $input_telephone;
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($name_err) && empty($email_err) && empty($password_err) && empty($telephone_err))
    {
        // Prepare an insert statement
        $sql = "INSERT INTO register (username, name, email, password, telephone) VALUES (?, ?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssss", $param_username, $param_name, $param_email, $param_password, $param_telephone);
            
            // Set parameters
            $param_username = $username;
            $param_name = $name;
            $param_email = $email;
            $param_password = $password;
            $param_telephone = $telephone;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>