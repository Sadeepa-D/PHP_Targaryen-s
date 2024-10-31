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
$sql = "INSERT INTO rejistration (name, email, dob, gender, u_name, user_password, confirm_password	, recovery) VALUES ('$name', '$email', '$dob', '$gender', '$u_name', '$user_password', '$confirm_password', '$recovery')";
if (mysqli_query($link, $sql)) 
   {
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
            .reji_con{
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
        <div class='reji_con'>
            <label>Record Inserted successfully</label>
        </div>
    </body>
</html>";
    }
    else {
    echo "Error inserting record into registration table: " . mysqli_error($link);
}


mysqli_close($link);
?>
