<?php
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip_code=$_POST['zip_code'];
$name_on_card=$_POST['name_on_card'];
$card_number=$_POST['card_number'];
$exp_month=$_POST['exp_month'];
$exp_year=$_POST['exp_year'];
$cvv=$_POST['cvv'];

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
$sql = "INSERT INTO payment (name,email,address,city,state,zip_code,name_on_card,card_number,exp_month,exp_year,cvv) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip_code', '$name_on_card', '$card_number','$exp_month','$exp_year','$cvv')";

if (mysqli_query($link, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($link);
}

mysqli_close($link);
?>