<?php

$host = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'art_g';

$conn = mysqli_connect($host, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,email,address,city,state,zip_code,name_on_card,card_number,exp_month,exp_year,cvv FROM payment";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip_code</th>
            <th>Name_On_Card</th>
            <th>Card_number</th>
            <th>Exp_month</th>
            <th>Exp_year</th>
            <th>CVV</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['address'] . "</td>
        <td>" . $row['city'] . "</td>
        <td>" . $row['state'] . "</td>
        <td>" . $row['zip_code'] . "</td>
        <td>" . $row['name_on_card'] . "</td>
        <td>" . $row['card_number'] . "</td>
        <td>" . $row['exp_month'] . "</td>
        <td>" . $row['exp_year'] . "</td>
        <td>" . $row['cvv'] . "</td>
          </tr>";
    }
    echo "</table>";
} else {

    echo "No records found.";
}

mysqli_close($conn);
