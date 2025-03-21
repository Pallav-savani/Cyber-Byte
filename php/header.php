<?php
    include("../security/s.php");
?>

<header class="top_header">
    <div class="navbar">
        <h3 class="navTitle">
            <a href="../index.php" class="home_back"><i class="ri-arrow-left-line"></i></a>
            <div class="headLogo">
                <i class="ri-macbook-fill"></i> Cyber Byte
            </div>
        </h3>
        <div class="cartBtn">
            <a href="cart.php" class="nav-item nav-link active">
            <h5 class="cart">
                <i class="ri-shopping-cart-2-fill"></i>cart 
                <?php

                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                        echo"<span id=\"cart_count\" class=\"text_warning\">$count</span>";
                    }
                    else{
                        echo"<span id=\"cart_count\" class=\"text_warning\">0</span>";
                    
                    }
                ?>   
            </h5>
            </a> 
        </div>
    </div>  

    <div class="browse_by">
        <div class="all_links">
            <a href="#laptops" class="all_txt">Laptops</a>
            <a href="#mobiles" class="all_txt">Mobiles</a>
            <a href="#tablets" class="all_txt">Tablets</a>
            <a href="#smart-tv" class="all_txt">Smart T.V</a>
            <a href="#drones" class="all_txt">Drones</a>
            <a href="#camera" class="all_txt">Camera</a>
            <a href="#smartwatch" class="all_txt">Smart Watches</a>
            <a href="#speakers" class="all_txt">Speakers</a>
            <a href="#headphones" class="all_txt">Headphones</a>
            <a href="#accessories" class="all_txt">Accessories</a>
        </div>
    </div>
</header>
