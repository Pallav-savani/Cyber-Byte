<?php
 session_start();

 require_once("../php/createdb.php");
 require_once("../php/component.php");
 require_once("../php/join.php");

 $db=$result;
 if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value['product_id']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo"<script>alert('Product has been Removed..!')</script>";
                echo"<script>window.location='cart.php'</script>";
            }
        }
    }
}

if(isset($_POST['place'])){
    if(isset($_SESSION['cart'])){
        $item_detail_id = array_column($_SESSION['cart'], "order_id");
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Byte - Cart</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
.cartHeader{
    position: relative;
    width: 100%;
    background-color: #00040d;
    display: flex;
    align-items: center;
    height: 4rem;
}
.cart_nav{
    position: relative;
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.logo{
    font-size: 28px;
    color: aliceblue;
}
.logo a{
    text-decoration: none;
    color: #aaa;
}

@media screen and (max-width: 520px) {
    .logo{
        font-size: 24px;
    }
}


</style>
<body>
<div id="Pre_loader">
    <img src="../images/cart-preloader.gif" alt="" class="loader_img">
</div>
<header class="cartHeader">
    <nav class="cart_nav">
        <div class="logo">
            <a href="main.php">
                <i class="ri-arrow-left-line"></i>
            </a>
            <i class="ri-macbook-fill"></i> Cyber Byte
        </div>

        <div class="nav">
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

    </nav>
</header>  

<section class="Cart section">
<div class="cart_container">
    <div class="cart_content">
        <div class="cart_details">
            <div class="shopping-cart" id="load_content">
                <a href="../category/main.php" class="home"><i class="ri-arrow-left-wide-line"></i>Go BACK</a>
                <h6 class="cart_title">My cart</h6>
                <hr>
                <?php
                    $total=0;
                    if(isset($_SESSION['cart']))
                    {
                        $product_id=array_column($_SESSION['cart'],'product_id');
                        $result2=$db;
                        while($row=mysqli_fetch_assoc($result2))
                        {
                            foreach($product_id as $id)
                            {
                                if($row['id']==$id)
                                {
                                    cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id'], $row['qyt']);
                                    $total=$total+(int)$row['product_price'];               
                                }
                            }
                        }
                    }
                    else{
                        echo "<h5 class=\"cart_empty\">Cart is Empty</h5>";
                    }
               ?>
        
            </div>
        </div>
        <div class="total_details">
            <div class="detail_cart">
                <h6 class="cart_title">Price Details</h6>
                <hr>
                <div class="row price_details">
                    <div class="col-md-6">
                        <?php
                        if(isset($_SESSION['cart']))
                         {
                            $count=count($_SESSION['cart']);
                            echo"<h6>Price($count items)</h6>";
                         }
                         else{
                            echo"<h6>price(0 items)</h6>";
                         }
                        ?>
                        <h6>Deliver charges</h6>
                        <hr>
                        <h6>Amount payble</h6>
                    </div>
                        <div class="col-md-6">
                            <h6>₹<?php echo $total ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>
                                <?php
                                echo "₹$total";
                                ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- <div class=\"quantity_btn\">
        <button type=\"button\" class=\"minus_btn\"><i class=\"ri-subtract-line\"></i></button> 
        <input type=\"text\" value=\"1\" class=\"form_contoral\">
        <button type=\"button\" class=\"plus_btn\"><i class=\"ri-add-line\"></i></button> 
    </div> -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/_Td7JjCTfyc?si=pDN-e-2pBMegzeJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
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
                <img src="../images/backimg1.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php
    include("footer.php");
?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<script src="script.js"></script>

<script>
    $(document).ready(function () {
        setInterval(function () {
            $(' #load_content').load(' #load_content');
        }, 2000);
    });
</script>

<script>
    var loader = document.getElementById("Pre_loader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>
</body>
</html>

<?php
    include("../security/s.php");
?>
