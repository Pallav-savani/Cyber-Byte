<?php
    include("../security/s.php");
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Connect to MySQL database (replace with your actual database credentials)
    $mysqli = new mysqli("localhost", "root", "", "cyberbyte");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Generate random order ID
    $order_id = rand(100000, 999999);

    // Retrieve and sanitize form data
    $name = $mysqli->real_escape_string($_POST['name']);
    $mobile_number = $mysqli->real_escape_string($_POST['mobileNum']);
    $state = $mysqli->real_escape_string($_POST['state']);
    $pin_code = $mysqli->real_escape_string($_POST['pinCode']);
    $city = $mysqli->real_escape_string($_POST['city']);
    $quantity = $mysqli->real_escape_string($_POST['qyt']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $payment_method = $mysqli->real_escape_string($_POST['paymentMethod']);
    $product_image = $mysqli->real_escape_string($_POST['product_image']);
    $product_name = $mysqli->real_escape_string($_POST['product_name']);
    $product_price = $mysqli->real_escape_string($_POST['product_price']);
    $total_price = $mysqli->real_escape_string($_POST['total']);
    $product_id = intval($_POST['product_id']); // Assuming you pass product_id in the form

    // Check stock level
    $sql = "SELECT qyt FROM producttb WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stock = $result->fetch_assoc();

    if (!$stock || $stock['qyt'] < $quantity) {
        echo "<script>alert('Not enough stock available.')</script>";
        echo "<script>window.location='../category/cart.php'</script>";
        $stmt->close();
        $mysqli->close();
        exit();
    }

    // Begin transaction
    $mysqli->begin_transaction();

    try {
        // Insert order
        $stmt = $mysqli->prepare("INSERT INTO orders (order_id, image, name, mobile_number, state, pin_code, city, quantity, email, address, payment_method, product_name, product_price, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("isssssssssssii", $order_id, $product_image, $name, $mobile_number, $state, $pin_code, $city, $quantity, $email, $address, $payment_method, $product_name, $product_price, $total_price);
        $stmt->execute();

        // Update stock level
        $stmt = $mysqli->prepare("UPDATE producttb SET qyt = qyt - ? WHERE id = ?");
        $stmt->bind_param("ii", $quantity, $product_id);
        $stmt->execute();

        // Commit transaction
        $mysqli->commit();

        $_SESSION['order_id'] = $order_id;
        header("Location: ../order/billshow.php");
        exit();
    } catch (Exception $e) {
        // Rollback transaction on error
        $mysqli->rollback();
        echo "Error: " . $e->getMessage();
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}
?>





