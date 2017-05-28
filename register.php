<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$qualification = $_POST['qua'];


$query = mysqli_query($conn, "INSERT INTO students VALUES ('','".$fname."','".$lname."','".$email."','".$pass."','".$dob."','".$qualification."')");


echo "You're Sucessfully Registerd";

?>