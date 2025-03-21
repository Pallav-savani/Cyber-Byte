<?php
    include("../security/s.php");
?>

<?php

session_start();
require_once('../php/createdb.php');

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
    <title>Cyber Byte - User Profile</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav_data">
                <div class="nav_content">
                    <a href="../index.php" class="nav_logo">
                        <i class="ri-arrow-left-line"></i> 
                    </a>
                    <div class="nav_logo">
                        <i class="ri-macbook-fill"></i> Cyber Byte
                    </div>
                </div>

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
                                <a href="../category/main.php #laptops" class="dropdown_link">
                                    Laptops
                                </a>
                            </li>

                            <li>
                                <a href="../category/main.php #tablets" class="dropdown_link">
                                    Tablets
                                </a>
                            </li>

                            <li>
                                <a href="../category/main.php #drones" class="dropdown_link">
                                    Drones & Camera
                                </a>
                            </li>

                            <li class="dropdown_subitem">
                                <div >
                                    <a href="../category/main.php" class="dropdown_link">
                                        Audio <i class="ri-arrow-down-s-line dropdown_sub_arrow"></i>
                                    </a>
                                </div>

                                <ul class="dropdown_submenu">
                                    <li>
                                        <a href="../category/main.php #headphones" class="dropdown_sublink">Headphones</a>
                                    </li>

                                    <li>
                                        <a href="../category/main.php #speakers" class="dropdown_sublink">Speaker</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="../category/main.php #mobiles" class="dropdown_link">
                                    Mobile
                                </a>
                            </li>

                            <li>
                                <a href="../category/main.php #smart-tv" class="dropdown_link">
                                    Smart T.V
                                </a>
                            </li>

                            <li>
                                <a href="../category/main.php #smartwatch" class="dropdown_link">
                                    Smart Watches
                                </a>
                            </li>

                            <li>
                                <a href="../category/main.php #accessories" class="dropdown_link">
                                    Accessories
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
                                <a href="../login/login.html" class="dropdown_link">
                                    Login <i class="ri-user-3-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="../signup/signup.html" class="dropdown_link">
                                    Signup <i class="ri-login-box-line"></i>
                                </a>
                            </li>
                        </ul> 
                    </li>

                    <li>
                        <a href="../category/cart.php" class="nav_link addTocart">
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
                        <a href="../order/ordershow.php" class="nav_link">
                            <div class="orderBox">
                                Show Order<i class="ri-shopping-bag-4-fill"></i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

<section class="profile_section">

    <div class="container1">
        <div class="profile">
            <form method="post" class="form1">
                <div class="email">
                    <a href="../index.php" class="name">Hello,</a>
                    <input type="text" id="userid" name="userid" class="field" value="<?php echo $userid; ?>" readonly>
                </div>
            </form>
            <form method="post" class="form2">
                <button type="submit" id="logoutButton" class="logout" name="logout"><i class="ri-logout-box-r-line"></i></button>
            </form>
        </div>

        <div class="info_container">
            <a href="orders.php" class="info_btn">
                <button><i class="fa-solid fa-box"></i> Order</button>
            </a>
            <a href="../index.php #help" class="info_btn">
                <button><i class="fa-solid fa-headphones"></i> Help Center</button>
            </a>
        </div>

        <div class="payment_container">
            <h1><i class="ri-bank-card-fill"></i> PAYMENTS</h1>
            <hr>
            <div class="payMethod">
                <h4 class="box">
                    <div class="imgbox">
                        <img src="../images/visa.png" alt="">
                    </div>
                    <p>VISA</p>
                </h4>
                <h4 class="box">
                    <div class="imgbox">
                        <img src="../images/mastercard.png" alt="">
                    </div>
                    <p>MASTER-CARD</p>
                </h4>
                <h4 class="box">
                    <div class="imgbox">
                        <img src="../images/Gpay.png" alt="">
                    </div>
                    <p>GOOGLE PAY</p>
                </h4>
                <h4 class="box">
                    <div class="imgbox">
                        <img src="../images/apple-pay.png" alt="">
                    </div>
                    <p>APPLE PAY</p>
                </h4>
            </div>
        </div>
    </div>

    <div class="personalInfo">
        <div class="per_cont">
            <div class="headQ">FAQs</div>
            <div class="FAQs">
                <h4>What happens when I Logout of CyberByte account?</h4>
                <p>When you log out of your CyberByte account, your profile is not visible to you. And you directly throws website home page.</p>

                <h4>What if I order a product from someone else's mobile number or email?</h4>
                <p>The phone number is normally so they can get in touch if there is a problem with your order. This being wrong might mean they cancel the order instead of being able to correct it.</p>

                <h4>What about the return policy?</h4>
                <p>Our website provides a maximum five days return policy to our customers. 
                And if it is more than five days, no return policy will be given to any customer</p>

                <h4>Can customer get refund on repalced product or defected product?</h4>
                <p>Under the amended Consumer Protection Act, 2019, all parties including the manufacturer, suppliers, sellers, etc., are liable for any defective product sold to a consumer.</p>
            </div>

            <div class="thank">Thnak's from our Team.</div>
        </div>
    </div>

</section>


<!-- =========== FOOTER SECTION =============  -->
<footer class="footer">
        <div class="footer_container">
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
                    <label class="footer_link"><a href="../login/terms.html">Terms & Condition</a></label>
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
                    <img src="../images/visa.png" alt="">
                    <img src="../images/mastercard.png" alt="">
                    <img src="../images/Gpay.png" alt="">
                    <img src="../images/apple-pay.png" alt="">
                </div>
             </div>
        </div>
        
    </footer>
    <div class="footer_rights">
        Copyright © 2024 by Cyber Byte. All rights Reserved.
    </div>



<script>
/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  toggle.addEventListener('click', () =>{
      // Add show-menu class to nav menu
      nav.classList.toggle('show-menu')
      // Add show-icon to show and hide menu icon
      toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle','nav-menu')
</script>


</body>
</html>