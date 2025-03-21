<?php
    include("../security/s.php");
?>

<?php
session_start();

include("../connection/connect.php");
require_once("../php/createdb.php");
require_once('../php/db.php');

if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
       $item_array_id=array_column($_SESSION['cart'],"product_id");
     if(in_array($_POST['product_id'],$item_array_id)){
       echo"<script>alert('Product alredy added in cart..!')</script>";
       echo "<script>window.location='mouse.php';</script>";    
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

require_once("../php/component.php");

if(isset($_POST['detail']))
{
    $item_arrays = array('pro_id' => $_POST['pro_id']);
    $_SESSION['product'][0] = $item_arrays;
    echo "<script>window.location = '../product-view/product-view.php';</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - Mouse</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="allitems.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

<div id="Pre_loader">
    <img src="../images/loader.gif" alt="" class="loader_img">
</div>

    <header class="item_header">
        <nav class="item_navbar">
            <h3 class="navTitle">
                <a href="main.php" class="home_back"><i class="ri-arrow-left-line"></i></a>
                <div class="headLogo">
                    <i class="ri-macbook-fill"></i> Cyber Byte
                </div>
            </h3>
            <div class="cartBtn">
                <a href="../category/cart.php" class="nav-item nav-link active">
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

<section class="pro_specific">
    <div class="specific_container">

        <div class="specific_content">
            <div class="spec_title">
                <h1>Mouse</h1>
            </div>

            <div class="item_content" id="load_content">

            <?php
                $con = mysqli_connect("localhost", "root", "", "cyberbyte");
                
                $sql = "SELECT * FROM producttb WHERE category='mouse' ";
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                }

            ?>

            </div>
        </div>
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
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/_Td7JjCTfyc?si=pDN-e-2pBMegzeJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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