<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection parameters
$host = 'localhost';
$userName = 'root';
$db_password = '';
$db_name = 'art_g';

$o_id=$_POST['o_id'];
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

// Connect to MySQL server
$link = mysqli_connect($host, $userName, $db_password, $db_name);

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO payment (`order id`,name,email,address,city,state,zip_code,name_on_card,card_number,exp_month,exp_year,cvv) VALUES ('$o_id','$name', '$email', '$address', '$city', '$state', '$zip_code', '$name_on_card', '$card_number','$exp_month','$exp_year','$cvv')";

if (mysqli_query($link, $sql)) {
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
                            .pay_ment{
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
                        </style>
                    </head>
                    <body>
                        <div class='pay_ment'>
                            <label>Record inserted succussfully</label>
                        </div>
                    </body>
                </html>";
} else {
    echo "Error inserting record: " . mysqli_error($link);
}

mysqli_close($link);
?>