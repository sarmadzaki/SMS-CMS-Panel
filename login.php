<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['oks'])) {
if (empty($_POST['em']) || empty($_POST['passx'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['em'];
$password=$_POST['passx'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include 'db.php';
// To protect MySQL injection for Security purpose

// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn, "SELECT * FROM students WHERE email='".$username."' AND password='".$password."'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: dashboard/index.php"); // Redirecting To Other Page
} else {
  echo "Username Or Password Is Wrong!";
}

mysqli_close($conn); // Closing Connection
}
}

?>