<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$u_name = $_POST['username'];
$user_password = $_POST['password'];
$confirm_password = $_POST['confirm_password']; 
$recovery = $_POST['recovery'];

// Database connection parameters
$host = 'localhost';
$userName = 'root';
$db_password = '';
$db_name = 'art_g';

// Connect to MySQL server
$link = mysqli_connect($host, $userName, $db_password, $db_name);

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
// Insert query
$sql = "INSERT INTO rejistration (name, email, dob, gender, u_name, user_password, confrim_password	, recovery) VALUES ('$name', '$email', '$dob', '$gender', '$u_name', '$user_password', '$confirm_password', '$recovery')";
if (mysqli_query($link, $sql)) 
   {
        echo "Records inserted successfully.";
    }
    else {
    echo "Error inserting record into registration table: " . mysqli_error($link);
}


mysqli_close($link);
?>
