<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $host = 'localhost';
    $username = 'root';
    $password = "";
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
            echo "<html>
                    <head>
                        <link rel='preconnect' href='https://fonts.googleapis.com'>
                        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                        <link href='https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Yanone+Kaffeesatz:wght@200..700&family=Reddit+Mono:wght@200..900&display=swap' rel='stylesheet'>
                        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    
                        <style>
                            body {
                                background-image: url('Photos/backgroundImg.png');
                            }
                            .fdbk{
                                position: relative;
                                background-color: rgba(0, 0, 0, 0.5);
                                border: solid white 1px;
                                border-radius:5px;
                                text-align:center;
                                color: goldenrod;
                                text-decoration: none;
                                font-size: 1.2em;
                                letter-spacing: 0.1em;
                                font-weight: 400;
                                padding: 10px 20px;
                                padding-left: 30px;
                                padding-right: 30px;
                                margin-top:20%;
                                margin-bottom:20%;
                                margin-left: 20%;
                                margin-right: 20%;
                            }
                                 .back-home {
                                position: fixed;
                                bottom: 20px;
                                right: 20px;
                                background-color: goldenrod;
                                color: white;
                                border: none;
                                padding: 10px 20px;
                                border-radius: 5px;
                                font-size: 1em;
                                font-weight: bold;
                                cursor: pointer;
                                text-decoration: none;
                            }
                            .back-home:hover {
                                background-color: darkgoldenrod;
                            }
                        </style>
                    </head>
                    <body>
                        <div class='fdbk'>
                            <label>Thank You for your feedback</label>
                        </div>
                        <a href='index.html' class='back-home'>Back to Home</a>
                    </body>
                </html>";
        }
    }
