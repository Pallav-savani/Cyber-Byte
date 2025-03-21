<?php
    include("../security/s.php");
?>

<?php

session_start();
require_once('../php/createdb.php');
include("../php/component.php");

$database=$result;
if(isset($_POST['add'])){
 if(isset($_SESSION['cart'])){
    $item_array_id=array_column($_SESSION['cart'],"product_id");
  if(in_array($_POST['product_id'],$item_array_id)){
    echo"<script>alert('product alredy added in cart..!')</script>";
    echo "<script>window.location='main.php';</script>";    
 }
  else{
    $count=count($_SESSION['cart']);
    $item_array=array('product_id'=>$_POST['product_id']);
    $_SESSION['cart'][$count]=$item_array;
  }
 }
 else{
     $item_array=array('product_id'=>$_POST['product_id']);
     $_SESSION['cart'][0]=$item_array;
 }
}


if (!isset($_SESSION['userid']) ) {
    header("Location: ../login/login.php");
    exit;
}


$userid = $_SESSION['userid'];

if (isset($_POST['logout'])) {
    $_SESSION = array();
    
    session_destroy();
    
    header("Location: /CyberByte/index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - My Orders</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="orders.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="leftHead">
                <a href="../index.php" class="nav_logo">
                    <i class="ri-arrow-left-line"></i> 
                </a>
                <div class="logo">
                    <i class="ri-macbook-fill"></i> My Orders
                </div>
            </div>

            <a href="../category/cart.php" class="addTocart">
                <div class="cartBox">
                    <i class="ri-shopping-cart-fill"></i> Cart 
                    <?php
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                            echo "<p id=\"cart_count\" class=\"text_warning\">$count</p>";
                        }
                        else{
                            echo "<p id=\"cart_count\" class=\"text_warning\">0</p>";
                        
                        }
                    ?>  
                </div>
            </a>
        </nav>
    </header>

    <section class="order">
        <div class="order_container">
            <div class="order_content" id="load_content">
                <div class="links">
                    <a href="../index.php">Home</a><i class="ri-arrow-right-s-line"></i><a href="profile.php">Profile</a><i class="ri-arrow-right-s-line"></i><a href="#">My orders</a>
                </div>

                <?php
                    $con = mysqli_connect("localhost", "root", "", "cyberbyte");
                        
                    $sql = "SELECT * FROM orders where email='$userid' ";
                    $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        showOrder($row['order_id'], $row['product_name'], $row['image'],$row['order_date']);
                    }

                ?>
                
                <div class="underDesc">
                    No more orders
                </div>
            </div>
        </div>
    </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        setInterval(function () {
            $(' #load_content').load(' #load_content');
        }, 2000);
    });
</script>

</body>
</html>