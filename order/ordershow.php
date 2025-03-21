<?php
    include("../security/s.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Byte - Show Order</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="ordershow.css">
</head>
<body>
<div class="container">
    <form action="#" method="post">
        <input type="text" name="order_id"  placeholder="Enter order-id" required>
        <button name="order" class="order" value="order">Show order</button>
        <button name="delet-order" class="del-order" value="delet-order">Cancel order</button>
    </form>
    <h1>Order Bill</h1>
<?php

if(isset($_POST['delet-order'])){
    $orderId = $_POST['order_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cyberbyte";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT order_date FROM orders WHERE order_id = :order_id');
    $stmt->execute(['order_id' => $orderId]);

    $order = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($order) {
        $orderDate = new DateTime($order['order_date']);
        $currentDate = new DateTime();
        
        $interval = $currentDate->diff($orderDate);
        $hoursDifference = ($interval->days * 24) + $interval->h;
        
        if ($hoursDifference > 24) {

            $message = "Order Time is more than 24 hours old. Order Can't Cancel. <br>";
            echo "<p class=\"cancel_msg\">$message</p>";

        } else {
            echo "Order Time is within the last 24 hours.";

            $sql = "DELETE FROM orders WHERE order_id =$orderId";
            $result = $conn->query($sql);
            $conn->close();

            $message = "Order cancel successfully.!";
            echo "<p class=\"cancel_msg\">$message</p>";
        }
    } else {
        echo "Order not found.";
    }
}

// if(isset($_POST['delet-order'])){
//    $delet=$_POST['order_id'];

//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $dbname = "cyberbyte";

//    $conn = new mysqli($servername, $username, $password, $dbname);

//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }

//    $sql = "DELETE FROM orders WHERE order_id =$delet";
//    $result = $conn->query($sql);
//    $conn->close();

//    $message = "Order cancel successfully.!";
//    echo "<p class=\"cancel_msg\">$message</p>";
// }
?>

<?php
if (isset($_POST['order'])) {
    $order_id=$_POST['order_id'];
    

    // Connect to your database
    $servername = "localhost";
    $username = "root"; // Replace with your username
    $password = ""; // Replace with your password
    $dbname = "cyberbyte"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve order details
    $sql = "SELECT * FROM orders WHERE order_id = $order_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Print order details
            echo "<div class='order-details'>";
            echo "<div class='header-info'>";
            echo "<p><strong>Order ID:</strong> " . $row["order_id"] . "</p>";
            echo "<p><strong>Date:</strong> " . date("d-m-Y") . "</p>";
            echo "</div>";
            echo "<hr>";
            echo "<h2>Customer Information</h2>";
            echo "<p><strong>Customer Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Mobile Number:</strong> " . $row["mobile_number"] . "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
            echo "<p><strong>Address:</strong> " . $row["address"] . ", " . $row["city"] . ", " . $row["state"] . ", " . $row["pin_code"] . "</p>";
            echo "<hr>";
            echo "<h2>Order Items</h2>";
            echo "<table class='items-table'>";
            echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";
            echo "<tr><td>" . $row["product_name"] . "</td><td>₹" . $row["product_price"] . "</td><td>" . $row["quantity"] . "</td></tr>";
            echo "</table>";
            echo "<div class='footer-info'>";
            echo "<p><strong>Total:</strong> ₹" . $row["total_price"] . "</p>"; 
            echo "<p><strong>Payment Method:</strong> " . $row["payment_method"] . "</p>";
            echo "<p><strong>Order Date:</strong> " . $row["order_date"] . "</p>";
            echo "</div>";
            echo "</div>";
            // Add more details as needed
        }
    } else {
        echo "Order details not found for order ID: $order_id";
    }

    // Close database connection
    $conn->close();
} else {
    echo "Order ID not found.";
}
?>
 <div class="back-button">
        <a href="../index.php" class="button">Back to Home</a>
    </div>

<div class="print-instruction">
        <p>Please take a screenshot or press Ctrl+P to save it as PDF</p>
</div>
</div>

</body>
</html>