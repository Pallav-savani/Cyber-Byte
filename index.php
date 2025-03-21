<?php
session_start();
require_once('php/component.php');
require_once('php/createdb.php');

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Byte</title>
    <link rel="shortcut icon" href="images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
<!-- <div id="preloader">
    <img src="images/loading-transparent.gif" alt="">
</div> -->

    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav_data">
                <a href="#" class="nav_logo">
                    <i class="ri-macbook-fill"></i> Cyber Byte
                </a>

                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-fill nav_burger"></i>
                    <i class="ri-close-line nav_close"></i>
                </div>
            </div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">

                    <li  class="dropdown_item">
                        <div class="nav_link">
                            <a href="#products">Products</a> <i class="ri-arrow-down-s-line dropdown_arrow"></i>
                        </div>

                        <ul class="dropdown_menu">
                            <li>
                                <a href="category/main.php #laptops" class="dropdown_link">
                                    Laptops
                                </a>
                            </li>

                            <li>
                                <a href="category/main.php #tablets" class="dropdown_link">
                                    Tablets
                                </a>
                            </li>

                            <li>
                                <a href="category/main.php #drones" class="dropdown_link">
                                    Drones & Camera
                                </a>
                            </li>

                            <li class="dropdown_subitem">
                                <div >
                                    <a href="category/main.php" class="dropdown_link">
                                        Audio <i class="ri-arrow-down-s-line dropdown_sub_arrow"></i>
                                    </a>
                                </div>

                                <ul class="dropdown_submenu">
                                    <li>
                                        <a href="category/main.php #headphones" class="dropdown_sublink">Headphones</a>
                                    </li>

                                    <li>
                                        <a href="category/main.php #speakers" class="dropdown_sublink">Speaker</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="category/main.php #mobiles" class="dropdown_link">
                                    Mobile
                                </a>
                            </li>

                            <li>
                                <a href="category/main.php #smart-tv" class="dropdown_link">
                                    Smart T.V
                                </a>
                            </li>

                            <li>
                                <a href="category/main.php #smartwatch" class="dropdown_link">
                                    Smart Watches
                                </a>
                            </li>

                            <li>
                                <a href="category/main.php #accessories" class="dropdown_link">
                                    Component's
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#help" class="nav_link">Help Center</a></li>

                    <li  class="dropdown_item">
                        <div class="nav_link">
                            User <i class="ri-arrow-down-s-line dropdown_arrow"></i>
                        </div>

                        <ul class="dropdown_menu">
                            <li>
                                <a href="login/login.html" class="dropdown_link">
                                    Login <i class="ri-user-3-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="signup/signup.html" class="dropdown_link">
                                    Signup <i class="ri-login-box-line"></i>
                                </a>
                            </li>
                        </ul> 
                    </li>

                    <li>
                        <a href="category/cart.php" class="nav_link addTocart">
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
                    </li>

                    <li>
                        <a href="order/ordershow.php" class="nav_link">
                            <div class="orderBox">
                                Show Order<i class="ri-shopping-bag-4-fill"></i>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="profile/profile.php" class="user">
                             <img src="images/user.png" alt="" class="user_icon">
                        </a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </header>

    <!-- ========== MAIN SECTION ==========  -->
    <main class="main">
        <section class="home section" id="home">
            <div class="home_container grid">
                <div class="home_text">
                    <h3 class="txt1">
                        Best Prices
                    </h3>
                    <h1 class="txt2">
                        Incredible Prices <br>on All Your <br>Favorite Items
                    </h1>
                    <h3 class="txt3">
                        Get more for less on selected brands
                    </h3>
                    <a href="category/main.php"><button class="shop">Shop Now</button></a>
                </div>

                <div class="swiper home_image">
                    <div class="swiper-wrapper home_img_container">
                        <div class="swiper-slide home_img_box">
                            <img src="images/back-watch1.jpg" alt="">
                        </div>
                        <div class="swiper-slide home_img_box">
                            <img src="images/back-head.jpg" alt="">
                        </div>
                        <div class="swiper-slide home_img_box">
                            <img src="images/ipad-back.jpeg" alt="">
                        </div>
                        <div class="swiper-slide home_img_box">
                            <img src="images/back-laptop.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="about_container grid">
                <div class="about_box">
                    <div class="about_image">
                        <img src="images/iphone1.jpg" alt="">
                    </div>
                    <div class="about_text">
                        <h3 class="about_txt1">Holiday Deals</h3>
                        <h2 class="about_txt2">Up to <br>30% off</h2>
                        <h3 class="about_txt3">Selected Smartphone Brands</h3>
                        <a href="category/main.php">
                            <button class="about_shop">Shop</button>
                        </a>
                    </div>
                </div>

                <div class="about_box">
                    <div class="about_image">
                        <img src="images/headB.jpg" alt="">
                    </div>
                    <div class="about_text">
                        <h3 class="about_txt1">Just In</h3>
                        <h2 class="about_txt2">Take Your <br>Sound <br>Anywhere</h2>
                        <h3 class="about_txt3">Top Headphone Brands</h3>
                        <a href="category/main.php">
                            <button class="about_shop">Shop</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="offer section" id="offer">
            <div class="offer_container grid">
                <div class="offer_data">
                    <i class="ri-e-bike-2-line"></i>
                    <h3 class="offer_txt">Curb-side pickup</h3>
                </div>
                <div class="offer_data">
                    <i class="ri-box-1-fill"></i>
                    <h3 class="offer_txt">Free shipping on orders over $50</h3>
                </div>
                <div class="offer_data">
                    <i class="ri-file-check-line"></i>
                    <h3 class="offer_txt">Low prices guaranteed</h3>
                </div>
                <div class="offer_data">
                    <i class="ri-time-line"></i>
                    <h3 class="offer_txt">Available to you 24/7</h3>
                </div>
            </div>
        </section>

        <section class="products section" id="products">
            <div class="slide_container grid swiper">
                <div class="slide-content">
                    <div class="title">
                        <h2>Best Sellers <small>Products</small></h2>
                    </div>
                    <div class="card_wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="images/drone.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">DJI Phantom 3 Advanced Quadcopter Drone 4k Resolution</h2>
                           <p class="price">₹83,405.36</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="images/ipad-pro.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">iPad Pro M1 Chip 256GB WiFi only (Gray) XDR Display</h2>
                           <p class="price">₹1,08,384.94</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                 <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="images/samsung-laptop.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">Samsung Galaxy Book4 Pro Evo Intel ultra 7 (16 GB/512 GB SSD)</h2>
                           <p class="price">₹1,39,990.57</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                     </div>
      
                    <div class="card swiper-slide" id="0">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="images/iphone-12.png" alt="" class="card_img" >
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">iPhone 12 256GB A13 Bionic Chip (Moon Blue) 3GHz speed</h2>
                           <p class="price">₹70,032.30</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                       </div>
                     </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="images/iphone-15-pro-max.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">iPhone 15 pro max 256GB A17 Bionic Chip (Titanium Gray)</h2>
                            <p class="price">₹1,29,090.21</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="images/smart-watch.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Paradox DZ09 Premium Smartwatch Bluetooth Support</h2>
                            <p class="price">₹1,587.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                            <div class="card_image">
                                <img src="images/speker.png" alt="" class="card_img">
                            </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Echo Plus (2nd Gen) Premium sound with 40mm driver</h2>
                            <p class="price">₹7,851.47</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="images/camera.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Logitech PTZ Pro 2 USB HD 1080P Video Camera for Conference</h2>
                            <p class="price">₹48,578.92</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="images/sony.png" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Sony MDRV55 Red Extra Bass & DJ Headphone with Surounding Sound</h2>
                            <p class="price">₹1,600.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div> 
                    </div>
                  </div>
      
                  <a href="category/main.php"><button class="view_btn">View All</button></a>
                  <!-- <button class="view_btn" onclick="ok()">View All</button> -->
               </div>
            </div>
            <div class="swiper-button-next  swiper-navBtn"></div>
            <div class="swiper-button-prev  swiper-navBtn"></div>
            <!-- <div class="swiper-pagination"></div> -->
      
         </section>

        <section class="category section" id="category">
            <div class="category_container grid">
                <div class="category_content">
                    <div class="title">
                        <h2>Shop By Category</h2>
                    </div>

                    <div class="category_box">
                        <a href="category/main.php #laptops">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/laptop.jpg" alt="">
                                </div>
                                <label class="name">Laptops</label>
                            </div>
                        </a>

                        <a href="category/main.php #mobiles">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/mobile.jpg" alt="">
                                </div>
                                <label class="name">Mobiles</label>
                            </div>
                        </a>

                        <a href="category/main.php #tablet">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/tablet.jpg" alt="">
                                </div>
                                <label class="name">Tablets</label>
                            </div>
                        </a>

                        <a href="category/main.php #smart-tv">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/tv.jpg" alt="">
                                </div>
                                <label class="name">Smart T.V</label>
                            </div>
                        </a>

                        <a href="category/main.php #accessories">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/logo-1.png" alt="">
                                </div>
                                <label class="name">Accessories</label>
                            </div>
                        </a>
                    <!-- </div> -->

                    <!-- <div class="category_box"> -->
                        <a href="category/main.php #drones">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/drone.png" alt="">
                                </div>
                                <label class="name">Drones</label>
                            </div>
                        </a>

                        <a href="category/main.php #smartwatch">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/smart-watch.png" alt="">
                                </div>
                                <label class="name">Smart Watches</label>
                            </div>
                        </a>

                        <a href="category/main.php #speakers">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/speker.png" alt="">
                                </div>
                                <label class="name">Speakers</label>
                            </div>
                        </a>

                        <a href="category/main.php #camera">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/camera.png" alt="">
                                </div>
                                <label class="name">Camera</label>
                            </div>
                        </a>

                        <a href="category/main.php #headphones">
                            <div class="box">
                                <div class="image_box">
                                    <img src="images/sony.png" alt="">
                                </div>
                                <label class="name">Headphones</label>
                            </div>
                        </a>
                    <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="about_container grid">
                <div class="about_box">
                    <div class="round"></div>
                    <div class="about_image1">
                        <img src="admin/uploads/rtx-3060one.png" alt="">
                    </div>
                    <div class="about_text">
                        <h3 class="ab_txt1">Holiday Deals</h3>
                        <h2 class="ab_txt2">Up to <br>30% off</h2>
                        <h3 class="ab_txt3">Selected Graphics Card</h3>
                        <a href="category/main.php">
                            <button class="about_shop">Shop</button>
                        </a>
                    </div>
                </div>

                <div class="about_box">
                    <div class="round1"></div>
                    <div class="about_image1">
                        <img src="admin/uploads/inteli9-processor.png" alt="">
                    </div>
                    <div class="about_text">
                        <h3 class="ab_txt1">Just In</h3>
                        <h2 class="ab_txt2">Make Your <br>PC Fast</h2>
                        <h3 class="ab_txt3">Top Processor Brands</h3>
                        <a href="category/main.php">
                            <button class="about_shop">Shop</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="products section" id="products">
            <div class="slide_container grid swiper">
                <div class="slide-content">
                    <div class="title">
                        <h2>Best Sellers <small>Accessories</small></h2>
                    </div>
                    <div class="card_wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="admin/uploads/RTX-4090.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">NVIDIA GeForce RTX 4090 Graphics Card 24GB GDDR6X</h2>
                           <p class="price">₹2,79,990</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="admin/uploads/Galax-case.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">Galax (Rev-06W) Revolution 06 White with 4 RGB Fans Preinstalled</h2>
                           <p class="price">₹3,899</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="admin/uploads/AULA-key.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">AULA F3287 Rainbow Backlight TKL Tenkeyless Mechanical Wired</h2>
                           <p class="price">₹1,949.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                     </div>
      
                    <div class="card swiper-slide" id="0">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="admin/uploads/Logitech-mouse.jpg" alt="" class="card_img" >
                           </div>
                        </div>
      
                        <div class="card_content">
                           <h2 class="pro_name">Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor</h2>
                           <p class="price">₹2,495.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                       </div>
                     </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                              <img src="admin/uploads/MSI-Motherboard.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">MSI PRO H610M-E DDR4 Motherboard, Micro-ATX</h2>
                            <p class="price">₹6,200.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>
      
                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="admin/uploads/ASUS-wifi.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">ASUS ROG Rapture Pro Tri-Band WiFi 6 Extendable Gaming Router</h2>
                            <p class="price">₹53,468.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                            <div class="card_image">
                                <img src="admin/uploads/Crucial1-ssd.jpg" alt="" class="card_img">
                            </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Crucial BX500 240GB 3D NAND SATA 6.35 cm (2.5-inch) SSD</h2>
                            <p class="price">₹1,890.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="admin/uploads/Crucial-RAM.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">Crucial RAM 16GB DDR5 4800MHz CL40 Desktop Memory</h2>
                            <p class="price">₹4,478</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image_content">
                           <div class="card_image">
                                <img src="admin/uploads/GAMDIAS-power.jpg" alt="" class="card_img">
                           </div>
                        </div>
      
                        <div class="card_content">
                            <h2 class="pro_name">GAMDIAS Aura GP550 Atom Series Fully Black Power Supply</h2>
                            <p class="price">₹2,199.00</p>
                        </div>
      
                        <div class="p_button">
                            <p class="star">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </p>
                            <a href="category/main.php #accessories">
                                <button type="submit" name="add" class="cart">Shop-now</button>
                            </a>
                        </div> 
                    </div>
                  </div>
      
                  <a href="category/main.php #accessories" ><button class="view_btn">View All</button></a>
                  <!-- <button class="view_btn" onclick="ok()">View All</button> -->
               </div>
            </div>
            <div class="swiper-button-next  swiper-navBtn"></div>
            <div class="swiper-button-prev  swiper-navBtn"></div>
            <!-- <div class="swiper-pagination"></div> -->
      
         </section>
        

        <section class="help section" id="help">
            <div class="help_container grid">
                <div class="help_content">
                    <div class="help_detail">
                        <h2 class="h_txt1">
                            Need Help? Check Out Our Help Center.
                        </h2>
                        <p class="h_txt2">
                            I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.
                        </p>
                        <button class="h_btn">
                            Go to Help Center
                        </button>
                    </div>
                    <div class="h_image">
                        <img src="images/backimg1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_Td7JjCTfyc?si=pDN-e-2pBMegzeJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </main>

    <!-- =========== FOOTER SECTION =============  -->
    <footer class="footer">
        <div class="footer_container grid">
        <div class="footer_contents">
            <div class="footer_content">
                <h3 class="footer_name">Store Location</h3>
                <div class="footer_links">
                    <label class="footer_link">666 Gandhi Chowk, <br>Junagadh, GJ 362001 <br>cyberbyte@gmail.com <br>1800-666-1035</label>
                </div>
                <div class="footer_icons">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-line"></i>
                    <i class="ri-twitter-fill"></i>
                </div>
            </div>

            <div class="footer_content">
                <h3 class="footer_name">Shop</h3>
                <div class="footer_links">
                    <label class="footer_link"><a href="category/main.php">Shop All</a></label>
                    <label class="footer_link"><a href="category/main.php #laptops">Laptops</a></label>
                    <label class="footer_link"><a href="category/main.php #tablets">Tablets</a></label>
                    <label class="footer_link"><a href="category/main.php #drones">Drones</a></label>
                    <label class="footer_link"><a href="category/main.php #camera">Camera</a></label>
                    <label class="footer_link"><a href="category/main.php #speakers">Speakers</a></label>
                    <label class="footer_link"><a href="category/main.php #mobiles">Mobile</a></label>
                    <label class="footer_link"><a href="category/main.php #smart-tv">Smart T.V</a></label>
                    <label class="footer_link"><a href="category/main.php #headphones">Headphones</a></label>
                    <label class="footer_link"><a href="category/main.php #smartwatch">Smart Watches</a></label>
                </div>   
            </div>

            <div class="footer_content">
                <h3 class="footer_name">Customer Support</h3>
                <div class="footer_links">
                    <label class="footer_link">Contact Us</label>
                    <label class="footer_link">Help Center</label>
                    <label class="footer_link">About Us</label>
                </div>
            </div>

            <div class="footer_content">
                <h3 class="footer_name">Policy</h3>
                <div class="footer_links">
                    <label class="footer_link"><a href="login/terms.html">Terms & Condition</a></label>
                    <label class="footer_link">Payment Methods</label>
                    <label class="footer_link">F&Q</label>
                </div>
            </div>

        </div>

            <div class="footer_line"></div>

            <div class="footer_payments">
                <div class="footer_text">
                    We accept the following paying methods
                </div>
                <div class="payment_img">
                    <img src="images/visa.png" alt="">
                    <img src="images/mastercard.png" alt="">
                    <img src="images/Gpay.png" alt="">
                    <img src="images/apple-pay.png" alt="">
                </div>
             </div>
        </div>
        
    </footer>
    <div class="footer_rights">
        Copyright © 2024 by Cyber Byte. All rights Reserved.
    </div>
    <!-- =========== FOOTER SECTION =============  -->

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>


<script src="script2.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- <script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script> -->

<script>
    var swiper = new Swiper(".home_image", {
      spaceBetween: 5,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>

<!-- Initialize Swiper -->.
<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 16,
    loop: true,
    grabCursor: 'true',
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        520:{
            slidesPerView: 2,
        },
        950:{
            slidesPerView: 3,
        },
        1118:{
            slidesPerView: 4,
        },
    },
  });
</script>


<script>
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>


</body>
</html>