<?php

$connect = mysqli_connect("localhost", "root", "", "art_g");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = mysqli_real_escape_string($connect, $_POST['un']);
    $password = mysqli_real_escape_string($connect, $_POST['pw']);
    
    if ($user_name === 'admin' && $password === 'admin') {
        header ("Location: pages/admin.html");
        exit(); 
    }

    // Query to check for matching username and password
    $query = "SELECT u_name , user_password FROM rejistration WHERE u_name='$user_name' AND user_password='$password'";
    $result = mysqli_query($connect, $query);
    
    // Check if a match is found
    if (mysqli_num_rows($result) > 0) {
        header("Location: pages/index.html");// Replace 'welcome.php' with your target page
        exit(); // Important to prevent further code execution
    } else {
        echo "Login unsuccessful";
    }
}
?>
