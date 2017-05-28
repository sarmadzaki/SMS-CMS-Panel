<?php
session_start();
include 'db.php';

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select * from students where email='".$user_check."'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){

header('Location: ../index.php'); // Redirecting To Home Page
}
?>