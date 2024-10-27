<?php
$host = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'art_g';

$conn = mysqli_connect($host, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT name,`order id`,email, address, city, state, zip_code, name_on_card, card_number, exp_month, exp_year, cvv FROM payment";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>order id</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Name on Card</th>
            <th>Card Number</th>
            <th>Exp Month</th>
            <th>Exp Year</th>
            <th>CVV</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['order id']) . "</td>
            <td>" . htmlspecialchars($row['email']) . "</td>
            <td>" . htmlspecialchars($row['address']) . "</td>
            <td>" . htmlspecialchars($row['city']) . "</td>
            <td>" . htmlspecialchars($row['state']) . "</td>
            <td>" . htmlspecialchars($row['zip_code']) . "</td>
            <td>" . htmlspecialchars($row['name_on_card']) . "</td>
            <td>" . htmlspecialchars($row['card_number']) . "</td>
            <td>" . htmlspecialchars($row['exp_month']) . "</td>
            <td>" . htmlspecialchars($row['exp_year']) . "</td>
            <td>" . htmlspecialchars($row['cvv']) . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['order_id'])) {
    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
    
    $sql2 = "DELETE FROM payment WHERE `order id` = '$order_id'";
    if (mysqli_query($conn, $sql2)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


echo '<br><br><form action="" method="post">
       <input type="text" name="order_id" placeholder="Enter Order ID">
       <input type="submit" value="Delete Order">
     </form>';

mysqli_close($conn);
?>
