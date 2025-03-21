<?php
    include("../security/s.php");
?>

<?php

session_start();
include("connect/admin-connect.php");

// Check if user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['pass'])) {
    // Redirect to login page if not logged in
    header("Location: admin_login.php");
    exit;
}

// Retrieve user ID and password from session
$userid = $_SESSION['user_id'];
$password = $_SESSION['pass'];

// Logout logic
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page after logout
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - Dashboard</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/adminglobal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    include("admin-header.php");
?>

<section class="menu_section section">

<?php
    include("admin_sidebar.php");
?>

    <div class="show_container">
        <div class="head_bar">
            <h1>Dashboard</h1>
            <hr>
        </div>

        <div class="dashboard_details">
            <div class="dash_container">
                <div class="all_details">
                    <div class="customer_info">
                        <div class="info_container">
                            <i class="ri-user-3-fill"></i>
                            <div class="details">
                                <h1>
                                    <?php
                                        $dash_login_query = "SELECT * FROM login";
                                        $dash_login_query_run = mysqli_query($con, $dash_login_query);

                                        if($total_login_row = mysqli_num_rows($dash_login_query_run)){
                                            echo '<h1>'. $total_login_row .'</h1>';
                                        }else{
                                            echo '<h1>0</h1>';
                                        }
                                    ?>
                                </h1> 
                                <p>Customer</p>
                            </div>
                        </div>
                        <a href="customers.php" class="detail_btn">
                            <button>View Details</button>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="product_info">
                        <div class="info_container">
                            <i class="ri-shopping-bag-line"></i>
                            <div class="details">
                                <h1>
                                    <?php
                                        $dash_login_query = "SELECT * FROM producttb";
                                        $dash_login_query_run = mysqli_query($con, $dash_login_query);

                                        if($total_login_row = mysqli_num_rows($dash_login_query_run)){
                                            echo '<h1>'. $total_login_row .'</h1>';
                                        }else{
                                            echo '<h1>0</h1>';
                                        }
                                    ?>
                                </h1>
                                <p>Products</p>
                            </div>
                        </div>
                        <a href="products.php" class="detail_btn">
                            <button>View Details</button>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="order_info">
                        <div class="info_container">
                            <i class="ri-shopping-cart-fill"></i>
                            <div class="details">
                                <h1>
                                    <?php
                                        $dash_login_query = "SELECT * FROM orders";
                                        $dash_login_query_run = mysqli_query($con, $dash_login_query);

                                        if($total_login_row = mysqli_num_rows($dash_login_query_run)){
                                            echo '<h1>'. $total_login_row .'</h1>';
                                        }else{
                                            echo '<h1>0</h1>';
                                        }
                                    ?>
                                </h1>
                                <p>Order</p>
                            </div>
                        </div>
                        <a href="order.php" class="detail_btn">
                            <button>View Details</button>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="detail_info">
                        <div class="info_container">
                            <i class="ri-profile-line"></i>
                            <div class="details">
                                <h1>
                                    <?php
                                        $dash_login_query = "SELECT * FROM detail";
                                        $dash_login_query_run = mysqli_query($con, $dash_login_query);

                                        if($total_login_row = mysqli_num_rows($dash_login_query_run)){
                                            echo '<h1>'. $total_login_row .'</h1>';
                                        }else{
                                            echo '<h1>0</h1>';
                                        }
                                    ?>
                                </h1>
                                <p>Product Details</p>
                            </div>
                        </div>
                        <a href="pro-detail.php" class="detail_btn">
                            <button>View Details</button>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php 
    include("admin_footer.php");
?>

</body>
</html>