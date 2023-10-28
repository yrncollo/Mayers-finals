<?php 
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    <?php
    if (!isset($_SESSION['username'])) { ?>
    <?php
    if (isset($_GET['register_action'])) {
    if ($_GET['register_action'] == "success") { ?>
    <b>Registration was Successful</b>
    <br>
    <b>You Can Now Log In!</b>
    <?php }
    }
    ?>

    <div class="wrapper">
        <h5>Register Now</h5>
    <form method="post" action="register-action.php">
        <label>First_Name:</label><br>
        <input type="text" name="first_name" required/><br>
        <label>Last_Name:</label><br>
        <input type="text" name="last_name" required/><br>
        <label>Email:</label><br>
        <input type="text" name="email" required/><br>
        <label>Confirm_Email:</label><br>
        <input type="text" name="confirm_email" required /><br>
        <label>Password:</label><br>
        <input type="password" name="password" required/><br>
        <input type="submit" value="Register" />
    </form>
You have an account? Click <a href="./login.html">here</a> to Login.
<?php } else { ?>
You already logged in. Click <a href="logout.php">here</a> to logout.
<?php }
?>
</body>
</html>

