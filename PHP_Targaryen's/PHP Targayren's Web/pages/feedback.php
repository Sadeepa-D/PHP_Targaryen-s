<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $host = 'localhost';
    $username = 'root';
    $password = "1234";
    $dbname = "art_g";

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn -> connect_error) {
        die("Cannot connect". mysqli_error($conn));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture and sanitize input data
        $name = $conn->real_escape_string($_POST["name"]);
        $mobile = $conn->real_escape_string($_POST["mobile"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $buy_option = $conn->real_escape_string($_POST["buy_option"]);
        $gender = $conn->real_escape_string($_POST["gender"]);
        $feedback = $conn->real_escape_string($_POST["feedback"]);

        $sql = "INSERT INTO feedback (`Name`, `Mobile Number`, `Email address`, `Location`, `Gender`, `Feedback`)
        VALUES ('$name','$mobile','$email','$buy_option','$gender','$feedback')";

        if ($conn->query($sql)===FALSE) {
            die("Error".$conn->error);
        }else{
            echo "Thank You for your feedback";
        }
    }