<?php
    include("../security/s.php");
?>

<?php
session_start();
require_once("../php/component.php");
require_once("../php/createdb.php");
require_once('../php/db.php');
require_once("../php/join.php");
$db1=$result1;

if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
       $item_array_id=array_column($_SESSION['cart'],"product_id");
     if(in_array($_POST['product_id'],$item_array_id)){
       echo"<script>alert('Product alredy added in cart..!')</script>";
       echo "<script>window.location='product-view.php';</script>";    
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
       //  print_r($_SESSION['cart']);
    }
}


if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['product'] as $key=>$value){
            if($value['pro_id'] == $_GET['id']){
                unset($_SESSION['product'][$key]);
                echo"<script>window.location='../category/main.php'</script>";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Byte - Details</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="sprostyle.css">
</head>

<body>
<div id="preLoader">
    <img src="../images/loader.gif" alt="" class="lodimg">
</div>

<header class="header">
    <a href="" class="head_title">
        <i class="ri-macbook-fill"></i> Cyber Byte
    </a>

    <a href="../category/cart.php" class="cart_btn">
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
    </a>
</header>

<section class="s_product">
    <div class="detail_container" id="load_content">
        <?php
            if(isset($_SESSION['product']))
            {
                $pro_id=array_column($_SESSION['product'],'pro_id');
                $result1=$db1;
                while($row=mysqli_fetch_assoc($result1))
                {
                    foreach($pro_id as $id1)
                    {
                        if($row['id'] == $id1)
                        {
                            product($row['image'],$row['name'],$row['price'], $row['id'], $row['qyt'], $row['spec1'], $row['spec2'], $row['spec3'], $row['spec4'], $row['spec5']);              
                        }
                        
                    }
                }
            }
            else{
                echo "ERROR";
            }
        ?>
 
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
    <iframe width="100" height="100" src="https://www.youtube.com/embed/GcGxQcytpuE?si=pti83lbfx7izY6ZZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</section>

<!-- <div class=\"quantity_btn\">
    <button type=\"button\" class=\"minus_btn\"><i class=\"ri-subtract-line\"></i></button> 
    <span class=\"form_contoral\">1</span>
    <button type=\"button\" class=\"plus_btn\"><i class=\"ri-add-line\"></i></button> 
</div> -->

    <!-- =========== FOOTER SECTION =============  -->
    <footer class="footer section">
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
                    <label class="footer_link" href="../category/index.php">Shop All</label>
                    <label class="footer_link">Laptops</label>
                    <label class="footer_link">Tablets</label>
                    <label class="footer_link">Drones</label>
                    <label class="footer_link">Camera</label>
                    <label class="footer_link">Speakers</label>
                    <label class="footer_link">Mobile</label>
                    <label class="footer_link">Smart T.V</label>
                    <label class="footer_link">Headphones</label>
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
    <!-- =========== FOOTER SECTION =============  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        setInterval(function () {
            $(' #load_content').load(' #load_content');
        }, 2000);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var loader = document.getElementById("preLoader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>
</body>
</html>