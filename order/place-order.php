<?php
    include("../security/s.php");
?>

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userid']) || !isset($_SESSION['password'])) {
    // Redirect to login page if not logged in
    header("Location: ../login/login.php");
    exit;
}

// Retrieve user ID and password from session
$userid = $_SESSION['userid'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <title>Cyber Byte - Order</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="placeorder.css">
</head>
<body>
<div id="pre_Loader">
    <img src="../images/ringloader.gif" alt="" class="lod_img">
</div>
    <header class="header">
        <p class="title"><i class="ri-macbook-fill"></i> Cyber Byte</p>
    </header>
    <section class="order section">
        <div class="order_container">
            <h1>Place Order</h1>
            <form action="bill.php" method="post" onsubmit="return validateCheckbox();">
                <div class="name_details">
                    <div class="field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="field">
                        <label for="mobileNum">Mo. No</label>
                        <input type="tel" id="mobileNum" name="mobileNum" placeholder="Enter your mobile number" required pattern="[0-9]{10}">
                    </div>
                </div>
                
                <div class="loc_details">
                    <div class="input">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" placeholder="Enter your state" required>
                    </div>
                    <div class="input">
                        <label for="pinCode">PIN Code</label>
                        <input type="text" id="pinCode" name="pinCode" placeholder="Enter your PIN code" required pattern="[0-9]{6}">
                    </div>
                    <div class="input">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter your city" required>
                    </div>
                    <div class="inputQyt">
                        <label for="qyt">Qyt.</label>
                        <!-- <input type="number" id="qyt" name="qyt" value="1" min="1" max="10" readolny> -->
                        <select name="qyt" id="qyt">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="address_details">
                    <div class="field1">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $userid; ?>" placeholder="Enter your email" required>
                    </div>
                    <div class="field1">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter your home address">
                    </div>
                </div>

                <div class="payment">
                <div class="cash">
                    <input type="checkbox" id="cash" name="paymentMethod" value="COD" checked> 
                    <label for="cash">Cash on Delivery</label>
                    <img src="../images/Wallet.svg" alt="">
                </div>
                </div>

                <img src="../images/upi.JPG" id="upiImage" style="display:none;">
                <!-- Display product data in text boxes -->
                <div class="product_details">
                    <div class="pro_field">
                        <input type="hidden" id="product_id" name="product_id" readonly>
                    </div>
                    <div class="pro_field">
                        <input type="hidden" id="product_image" name="product_image" readonly>
                    </div>
                    <div class="pro_field">
                        <label for="product_name">Product Name</label>
                        <input type="text" id="product_name" name="product_name" readonly>
                    </div>
                    <div class="pro_field">
                        <label for="product_price">Product Price</label>
                        <input type="text" id="product_price" name="product_price" readonly>
                    </div>
                    <div class="pro_field">
                        <label for="total">Total</label>
                        <input type="text" id="total" name="total" readonly>
                    </div>
                    <!-- Add more fields for other product data if needed -->
                </div>


                <button type="submit" name="placeBtn" class="placeBtn">Place Order</button>
            </form>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_Td7JjCTfyc?si=pDN-e-2pBMegzeJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <script>
    // Function to validate at least one checkbox is selected
    function validateCheckbox() {
        var cashCheckbox = document.getElementById("cash");

        if (!cashCheckbox.checked) {
            alert("Please select at least one payment method.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission if at least one checkbox is selected
    }
</script>

     <script>
        window.onload = function() {
            // Call the function on page load
            calculateTotal();
        }

        // Function to calculate total
        function calculateTotal() {
            var productPrice = parseFloat(document.getElementById("product_price").value);
            var quantity = parseInt(document.getElementById("qyt").value);
            var total = productPrice * quantity;
            document.getElementById("total").value = total.toFixed(2); // Display total with 2 decimal places
        }

        // Event listeners to recalculate total when product price or quantity changes
        document.getElementById("product_price").addEventListener("input", calculateTotal);
        document.getElementById("qyt").addEventListener("input", calculateTotal);
    </script>
    <script>
        // Function to extract query parameter from URL
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Retrieve product data from URL and set values in text boxes
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('product_id').value = getQueryParam('productid');
            document.getElementById('product_image').value = getQueryParam('productimage');
            document.getElementById('product_name').value = getQueryParam('productname');
            document.getElementById('product_price').value = getQueryParam('productprice');
            // Add more lines to set other product data if needed
            calculateTotal(); // Calculate total when product data is set
        });
    </script>
<script>
    var loader = document.getElementById("pre_Loader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>
</body>
</html>