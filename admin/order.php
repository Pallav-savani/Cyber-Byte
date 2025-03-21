<?php
    include("../security/s.php");
?>


<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['pass'])) {
    // Redirect to login page if not logged in
    header("Location: admin_login.php");
    exit;
}

// Retrieve user ID and password from session
$userid = $_SESSION['user_id'];
$password = $_SESSION['pass'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - Administrator</title>
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

    <div class="customer_container">
        <div class="customer_content">
            <div class="cus_logo">
                <h1 class="page-header">Orders</h1>
            </div>

            <div class="search_container">
                <form action="" method="get" class="form1">
                    <input type="text" required placeholder="Search.." name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>">
                    <button type="submit" name="submit" class="go_btn" >Search <i class="ri-search-2-line"></i></button>
                    <!-- <a href="products.php" class="go_btn">View All <i class="ri-eye-line"></i></a> -->
                </form>
                <form action="" method="post" class="form2">
                    <input type="hidden" name="view" value="<?php if(isset($_POST['view'])){ echo $_POST['view']; } ?>">
                    <button type="submit" name="submit" class="go_btn1">View All <i class="ri-eye-line"></i></button>
                </form>
            </div>
            <hr>

            <!-- Table -->
        <div class="table_container">     
            <table class="table table-striped table-bordered table-condensed" style="width: max-content;">
                <!-- <div class="add_container">
                    <a href="adds/add-products.php" class="cus_add_btn">
                        <button><i class="ri-add-fill"></i> Add new</button>
                    </a>
                </div> -->
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>State</th>
                        <th>PIN</th>
                        <th>City</th>
                        <th>E-mail</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>Product name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Order date</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $conn = mysqli_connect("localhost", "root", "", "cyberbyte");

                        if(isset($_GET['search'])){
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM orders WHERE CONCAT(order_id,name,mobile_number,state,pin_code,city,email,address,payment_method,product_name,product_price,quantity,order_date) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($conn, $query);
                        
                            if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $items){
                                    ?>
                                    <tr>
                                        <td><?php echo $items['order_id']; ?></td>
                                        <td class="orderImgbox"><img src="uploads/<?php echo $items['image']; ?>" alt=""></td>
                                        <td><?php echo $items['name']; ?></td>
                                        <td><?php echo $items['mobile_number']; ?></td>
                                        <td><?php echo $items['state']; ?></td>
                                        <td><?php echo $items['pin_code']; ?></td>
                                        <td><?php echo $items['city']; ?></td>
                                        <td><?php echo $items['email']; ?></td>
                                        <td><?php echo $items['address']; ?></td>
                                        <td><?php echo $items['payment_method']; ?></td>
                                        <td><?php echo $items['product_name']; ?></td>
                                        <td><?php echo $items['product_price']; ?></td>
                                        <td><?php echo $items['quantity']; ?></td>
                                        <td><?php echo $items['total_price']; ?></td>
                                        <td><?php echo $items['order_date']; ?></td>
                                    </tr>
                             <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="14" style="text-align: center;">No Data Found..!!</td>
                                </tr>
                                <?php
                            }
                        }
                        
                    ?>

                    <?php 

                    $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                    if(isset($_POST['view'])){
                    
                        $sql = "SELECT * FROM orders";
                        $result = mysqli_query($con, $sql);
                    
                        if(mysqli_num_rows($result) < 1){
                            ?>
                            <tr>
                                <td colspan="15" style="text-align: center;">NO data found..!!</td>
                            </tr>
                            <?php
                        }
                        else{

                            foreach($result as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row['order_id']; ?></td>
                                    <td class="orderImgbox"><img src="uploads/<?php echo $row['image']; ?>" alt=""></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mobile_number']; ?></td>
                                    <td><?php echo $row['state']; ?></td>
                                    <td><?php echo $row['pin_code']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['payment_method']; ?></td>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td><?php echo $row['product_price']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['total_price']; ?></td>
                                    <td><?php echo $row['order_date']; ?></td>
                                </tr>
                                <?php
                            }
                        }

                    }

                    ?>
                </tbody>
            </table>
            <!-- //Table -->
        </div>

        </div>
    </div>
</section>

<?php 
    include("admin_footer.php");
?>

</body>
</html>