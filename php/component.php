<?php
function component($productname, $productprice, $productimg, $productid, $pro_id, $quantity) {
    ob_start();
    ?>
    <div class="content">
        <form action="main.php" method="post" class="form_data">
            <div class="card">
                <div class="img_box">
                    <img src="../admin/uploads/<?php echo htmlspecialchars($productimg); ?>" alt="" class="card_img">
                </div>
                <div class="d_btn">
                    <button type="submit" name="detail" class="detail_btn">
                        <i class="ri-error-warning-fill"></i>Details
                    </button>
                    <input type='hidden' name='pro_id' value='<?php echo htmlspecialchars($pro_id); ?>'>
                </div>
                <div class="card_body">
                    <h5 class="card_txt"><?php echo htmlspecialchars($productname); ?></h5>
                    <div class="card_price">
                        <span class="price">₹<?php echo htmlspecialchars($productprice); ?></span>

                        <input type='hidden' name='qyt' value='<?php echo htmlspecialchars($quantity); ?>'>
                        <?php
                            // Display stock status
                            if ($quantity <= 0) {
                                echo "<h3 class='out-of-stock'>Out of stock</h3>";
                            } else if ($quantity <= 5){
                                echo "<h3>Only $quantity left</h3>";
                            } else if ($quantity <= 8) {
                                echo "<h3>Only few left</h3>";
                            }
                        ?>
                    </div>
                    <div class="buttons">
                        <h6>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                        </h6>
                        <?php if ($quantity > 0): ?>
                            <button type="submit" name="add" class="btn">Add to cart</button>
                        <?php endif; ?>
                        <input type='hidden' name='product_id' value='<?php echo htmlspecialchars($productid); ?>'>

                    </div>
                </div> 
            </div>
        </form>   
    </div>
    <?php

    $element = ob_get_clean();
    echo $element;
}
?>


<?php
function product($proimg, $proname, $proprice, $pro_id, $quantity, $spec_1, $spec_2, $spec_3, $spec_4, $spec_5) {
    ob_start();
    ?>
    <form action="product-view.php?action=remove&id=<?php echo htmlspecialchars($pro_id); ?>" method="post" class="form_detail">
        <div class="detail_content">
            <div class="image_content">
                <button type="submit" class="back_btn" name="remove"><i class="ri-arrow-left-line"></i></button>
             <img src="../admin/uploads/<?php echo htmlspecialchars($proimg); ?>" alt="" >
            </div>

            <div class="description_content">      
                <h6>Product Detail..</h6>
                <h3><?php echo htmlspecialchars($proname); ?></h3>
                <p class="stars">
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-half-s-fill"></i>
                    <i class="ri-star-s-line"></i>
                </p>
                <h2>₹<?php echo htmlspecialchars($proprice); ?> <small>Best Price</small></h2>
                <div class="quantity_btn">              
                </div>
                <div class="buttons">
                    <?php if ($quantity > 0): ?>
                        <button type="submit" name="add" class="add-cart">Add to cart</button>
                    <?php endif; ?>
                    <input type='hidden' name='product_id' value='<?php echo htmlspecialchars($pro_id); ?>'>

                    <input type='hidden' name='qyt' value='<?php echo htmlspecialchars($quantity); ?>'>
                    <?php
                        if ($quantity <= 0) {
                            echo "<h3 class='out-of-stock'>Out of stock</h3>";
                        } else if ($quantity <= 5) {
                            echo "<h3>Only $quantity left</h3>";
                        } else if ($quantity <= 8) {
                            echo "<h3>Only few left</h3>";
                        }
                    ?>
                </div>
                
                <div class="spec_container">
                    <hr>
                    <div class="spec_h">
                        <h3>Highlights</h3>
                    </div>

                    <hr>
                    <div class="spec_desc">
                        <h3><?php echo htmlspecialchars($spec_1); ?></h3>
                        <h3><?php echo htmlspecialchars($spec_2); ?></h3>
                        <h3><?php echo htmlspecialchars($spec_3); ?></h3>
                        <h3><?php echo htmlspecialchars($spec_4); ?></h3>
                        <h3><?php echo htmlspecialchars($spec_5); ?></h3>
                    </div>

                </div>
                <hr>

                <div class="warranty">
                    <div class="war_h">
                        <h1>Warranty</h1>
                    </div>
                    <div class="war_box">
                        <div class="war_r">
                            Warranty<br> Summary
                        </div>
                        <div class="war_l">
                            <h5>1 Year Onsite Warranty</h5>
                        </div>
                    </div>
                </div>

                <div class="offers">
                    <p class="a_offer">Available offers</p>
                    <p class="bank_offers"><i class="ri-price-tag-3-fill"></i> <b>Bank Offer</b> 10% off up to ₹1,250 on HDFC Bank Credit Card EMI</p>
                    <p class="bank_offers"><i class="ri-price-tag-3-fill"></i> <b>Bank Offer</b> Get ₹50 instant discount on first Cyber Byte UPI txn on order of ₹200 and above</p>
                    <p class="bank_offers"><i class="ri-price-tag-3-fill"></i> <b>Bank Offer</b> 5% Cashback on Cuber Byte Axis Bank Card</p>
                    <p class="bank_offers"><i class="ri-price-tag-3-fill"></i> <b>Special Offer</b> Get extra 15% off (price inclusive of cashback/coupon)</p>
                </div>


                <div class="thnx">
                    <h1>Thanks From Our Team..!</h1>
                </div>
            </div>
        </div>
    </form>
    <?php

    $element = ob_get_clean();
    echo $element;
}
?>


<?php

function cartElement($productimg ,$productname , $productprice , $productid, $quantity) {
    ?>
    <form action="cart.php?action=remove&id=<?php echo htmlspecialchars($productid); ?>" method="post" class="cart-items">
    <div class="card_info">
        <div class="card_row">
            <div class="image_box">
                <img src="../admin/uploads/<?php echo htmlspecialchars($productimg); ?>" alt="img1" class="imgs">
            </div>
            <div class="item_details">
                <h5 class="item_name"><?php echo htmlspecialchars($productname); ?></h5>
                <h5 class="item_price">₹ <?php echo htmlspecialchars($productprice); ?></h5>
                <div class="item_btn">
                    <input type='hidden' name='qyt' value='<?php echo htmlspecialchars($quantity); ?>'>
                    <?php
                        if ($quantity <= 0) {
                            echo "<h3 class='out-of-stock'>Out of stock</h3>";
                        } else if ($quantity <= 5) {
                            echo "<h3>Only $quantity left</h3>";
                        } else if ($quantity <= 8) {
                            echo "<h3>Only few left</h3>";
                        }
                    ?>
                    
                    <div class="merg_btn">
                        <?php if ($quantity > 0): ?>
                            <a href="../order/place-order.php?productid=<?php echo htmlspecialchars($productid); ?>&productname=<?php echo htmlspecialchars($productname); ?>&productprice=<?php echo htmlspecialchars($productprice); ?>&productimage=<?php echo htmlspecialchars($productimg); ?>" class="order_btn">Place Order</a>
                        <?php endif; ?>

                        <button type="submit" class="remove_btn" name="remove">Remove</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
}

?>


<?php

function showOrder($orderid,$proname,$proimage,$orderdate){
    ?>
    
    <form action="orders.php?<?php echo htmlspecialchars($orderid); ?>" method="post" class="order_form">
        <div class="card">
            <div class="imgBox">
                <img src="../admin/uploads/<?php echo htmlspecialchars($proimage); ?>" alt="">
            </div>

            <div class="cardDesc">
                <a href="../order/ordershow.php">
                <div class="descBox">
                    <div class="desc">
                        <h4>Order Id : <?php echo htmlspecialchars($orderid); ?></h4>
                        <h5>Ordered on <?php echo htmlspecialchars($orderdate); ?></h5>
                        <h4><?php echo htmlspecialchars($proname); ?></h4>
                    </div>
                    <div class="icon">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
                </a>

                <p class="stars">
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-s-fill"></i>
                    <i class="ri-star-half-s-fill"></i>
                    <i class="ri-star-s-line"></i>
                </p>
            </div>
            
        </div>
    </form>
    <?php
}

?>