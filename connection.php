<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "incidence_report";

$conn= new mysqli($hostName, $userName, $password, $dbName);
if($conn){
   echo "connected";
}else{
   echo "not connected";
}

// Writing a mysql query to retrieve data  
$sql = "SELECT First_Name FROM sign_up"; 
$result = $conn->query($sql); 
 
?>