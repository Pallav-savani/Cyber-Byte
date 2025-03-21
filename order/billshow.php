<?php
    include("../security/s.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CyberByte - Order Bill</title>
<link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        width: 100%;
        height: 100vh;
        font-family: 'Jost', sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    h1, h2, h3 {
        text-align: center;
        color: #333;
    }
    .order-details {
        margin-top: 20px;
    }
    .order-details p {
        margin: 5px 0;
    }
    .order-details hr {
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }
    .order-details .header-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .order-details .header-info p {
        margin: 5px 0;
    }
    .order-details .items-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    .order-details .items-table th, .order-details .items-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        min-width: 100px;
    }
    .order-details .items-table th {
        background-color: #f2f2f2;
    }
    .footer-info {
        margin-top: 20px;
    }
    .footer-info p {
        margin: 5px 0;
    }
    .back-button {
        text-align: center;
        margin-top: 20px;
    }
    .button {
        display: inline-block;
        background-color: #f4f4f4;
        border: 2px solid black;
        color: #333;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }
    .button:hover {
        background-color: #ffebcc;
        border-color: #f60;
        color: #222;
    }
    .print-instruction {
        text-align: center;
        margin-top: 20px;
    }
    .print-instruction p {
        background-color: #f4f4f4;
        color: #333;
        padding: 10px 20px;
        border: 2px solid black;
        border-radius: 5px;
        font-weight: bold;
        display: inline-block;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    .print-instruction p:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }
    @media screen and (max-width: 600px) {
        .container {
            max-width: 100%;
            border-radius: 0;
        }
    }
</style>
</head>
<body>

<div class="container">
    <h1>Order Bill</h1>
<?php
session_start(); // Start the session

// Check if the order ID is set in the session
if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];

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