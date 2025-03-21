<?php
    include("../security/s.php");
?>

<?php 

session_start();
require_once("../php/component.php");
require_once("../php/createdb.php");
require_once('../php/db.php');

$database=$result;
if(isset($_POST['add'])){
 if(isset($_SESSION['cart'])){
    $item_array_id=array_column($_SESSION['cart'],"product_id");
  if(in_array($_POST['product_id'],$item_array_id)){
    echo"<script>alert('Product alredy added in cart..!')</script>";
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
    //  print_r($_SESSION['cart']);
 }
}

require_once("../php/component.php");
require_once('../php/db.php');
require_once("../php/join.php");
$db1=$result1;

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
    <title>Cyber Byte - All Products</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="Pre_loader">
    <img src="../images/loader.gif" alt="" class="loader_img">
</div>

<?php
    require_once("../php/header.php");
?>
    
<section class="products"> <!-- section -->
<div class="item_container">
    <div class="items_contents">
        <div class="all_items">
            <div class="titles">
                <p class="title_txt">All Products</p>
            </div>

            <div class="slide" id="load_content">
                <hr>

                <div class="slide_container" id="laptops">
                    <div class="pro_title">
                        Laptops
                        <a href="laptops.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='laptop' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                            
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>
                
                <div class="slide_container" id="mobiles">
                    <div class="pro_title">
                        Mobiles
                        <a href="mobiles.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='mobile' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                            
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="tablets">
                    <div class="pro_title">
                        Tablets
                        <a href="tablets.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='tablet' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }

                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="smart-tv">
                    <div class="pro_title">
                        Smart T.V
                        <a href="tv.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='tv' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                            
                        ?>
                    </a>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="drones">
                    <div class="pro_title">
                        Drones
                        <a href="drones.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='drone' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }

                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="camera">
                    <div class="pro_title">
                        Camera
                        <a href="cameras.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='camera' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }

                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="smartwatch">
                    <div class="pro_title">
                        Smart Watches
                        <a href="smart-watchs.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='watch' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                            
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="speakers">
                    <div class="pro_title">
                        Speakers
                        <a href="speakers.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php

                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='speaker' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }

                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="headphones">
                    <div class="pro_title">
                        Headphones & Buds
                        <a href="headphones.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='headphone' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container" id="accessories">
                    <div class="titles">
                        <p class="title_txt">Accessories</p>
                    </div>
                    <hr>

                    <div class="pro_title">
                        Graphics Cards
                        <a href="graphics-card.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='graphic' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        PC Cabinets
                        <a href="PC-cabinets.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='cabinet' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Keyboards
                        <a href="keyboards.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='keyboard' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Mouse
                        <a href="mouse.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='mouse' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Motherboard's
                        <a href="motherboards.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='motherboard' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Router's
                        <a href="router.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='wifi' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        SSD's
                        <a href="SSD's.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='ssd' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                            
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        RAM
                        <a href="RAM's.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='RAM' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Power Supply's
                        <a href="power-supply.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='power' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Processor
                        <a href="processor.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='processor' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>

                <div class="slide_container">
                    <div class="pro_title">
                        Monitors
                        <a href="monitors.php">
                            <button class="view"><i class="ri-arrow-right-s-line"></i></button>
                        </a>
                    </div>
                    <div class="item_content">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                            $sql = "SELECT * FROM producttb WHERE category='monitor' ";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['id'], $row['qyt']);
                            }
                        ?>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>
        </div>

    </div>
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
    let stock = 10;  // Example initial stock
    function updateStock() {
        const quantityInput = document.getElementById('quantity');
        const stockStatus = document.getElementById('stockStatus');
        const quantity = parseInt(quantityInput.value, 10);
        if (quantity > stock) {
            stockStatus.textContent = 'Not enough stock available.';
            stockStatus.classList.add('out-of-stock');
        } else {
            stockStatus.textContent = '';
            stockStatus.classList.remove('out-of-stock');
        }
        if (stock <= 0) {
            stockStatus.textContent = 'Out of stock';
            stockStatus.classList.add('out-of-stock');
        }
    }
</script>

<script>
    var loader = document.getElementById("Pre_loader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })
</script>

<script>
    const scrollUp = () =>{
    	const scrollUp = document.getElementById('scroll-up')
    	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll'): scrollUp.classList.remove('show-scroll')
    }
    window.addEventListener('scroll', scrollUp)
</script>

<script>
    $(document).ready(function(){
        setInterval(function(){
            $(" #load_content").load(window.location.href + " #load_content" );
        }, 2000);
    });
</script>

</body>
</html>