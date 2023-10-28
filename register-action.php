<?php

$con = mysqli_connect('localhost', 'root', '', 'incidence_report');

if(!$con)
{
  echo 'Not Connected to Server';

}
if(!mysqli_select_db($con,'trials'))
{
  echo 'Database Not Selected';
}

$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$Email = $_POST['email'];
$Confirm_Email = $_POST['confirm_email'];
$Password = $_POST['password'];


$sql = "INSERT INTO try (First_Name, last_name, Last_Name, Confirm_Email, Password) VALUES ('$First_Name', '$Last_Name', '$Email', $Confirm_Email, $Password)";

// if(!mysqli_query($con,$sql))
// {
//   echo 'Not Inserted';
// }
// else
// {
//   echo 'Inserted';
// }
header("Location:index.php?register_action=success");
?>


