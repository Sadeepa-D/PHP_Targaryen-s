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
$db_password = '1234';
$db_name = 'art_g';

// Connect to MySQL server
$link = mysqli_connect($host, $userName, $db_password, $db_name);

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
// Insert query
$sql1 = "INSERT INTO rejistration (name, email, dob, gender, u_name, user_password, confrim_password	, recovery) VALUES ('$name', '$email', '$dob', '$gender', '$u_name', '$user_password', '$confirm_password', '$recovery')";
if (mysqli_query($link, $sql1)) {
    // Insert into the login table
    $sql2 = "INSERT INTO login (u_name, user_password) VALUES ('$u_name', '$user_password')";
    if (mysqli_query($link, $sql2)) {
        echo "Records inserted successfully.";
    } else {
        echo "Error inserting record into login table: " . mysqli_error($link);
    }
} else {
    echo "Error inserting record into registration table: " . mysqli_error($link);
}


mysqli_close($link);
?>

