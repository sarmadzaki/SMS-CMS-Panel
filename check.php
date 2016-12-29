<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

include 'school/db.php';

$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$user' AND `password`='$pass'");
$row = mysqli_num_rows($query);
if ($row == 1) {
	header("Location: school/index.php");
} else {
	echo "Username Or Password Is wrong";
}
?>