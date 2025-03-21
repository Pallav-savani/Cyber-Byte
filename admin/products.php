<?php
    include("../security/s.php");
?>

<?php
session_start();
include("connect/admin-connect.php");

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
                <h1 class="page-header">Products</h1>
            </div>

            <div class="search_container">
                <form action="" method="get" class="form1">
                    <input type="text" required placeholder="Search.." name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>">
                    <button type="submit" name="submit" class="go_btn" >Search <i class="ri-search-2-line"></i></button>
                </form>
                <form action="" method="post" class="form2">
                    <input type="hidden" name="view" value="<?php if(isset($_POST['view'])){ echo $_POST['view']; } ?>">
                    <button type="submit" name="submit" class="go_btn1">View All <i class="ri-eye-line"></i></button>
                </form>
            </div>
            <hr>

            <div class="table_content">
                <!-- Table -->   
                <table class="table table-striped table-bordered table-condensed">
                    <div class="add_container">
                        <a href="adds/add-products.php" class="cus_add_btn">
                            <button><i class="ri-add-fill"></i> Add new</button>
                        </a>
                    </div>
                    <thead>
                        <tr>
                            <th width="4%">ID</th>
                            <th width="45%">Product Name</th>
                            <th width="8%">Product Price</th>
                            <th width="10%">Product image</th>
                            <th width="6%">Category</th>
                            <th width="6%">Stock</th>
                            <th width="12%">Actions</th>
                        </tr>
                    </thead> 
                    <tbody>

                    <?php

                        $conn = mysqli_connect("localhost", "root", "", "cyberbyte");

                        if(isset($_GET['search'])){
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM producttb WHERE CONCAT(id,product_name,category) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($conn, $query);
                        
                            if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $items){
                                    ?>
                                    <tr>
                                        <td><?php echo $items['id']; ?></td>
                                        <td><?php echo $items['product_name']; ?></td>
                                        <td><?php echo $items['product_price']; ?></td>
                                        <td class="tdImgbox"><img src="uploads/<?php echo $items['product_image']; ?>" alt=""></td>
                                        <td><?php echo $items['category']; ?></td>
                                        <td><?php echo $items['qyt']; ?></td>
                                        <td>
                                            <a href="edit/edit_product.php?id=<?php echo $items['id']; ?>&product_name=<?php echo $items['product_name']; ?>&product_price=<?php echo $items['product_price']; ?>&product_image=<?php echo $items['product_image']; ?>&category=<?php echo $items['category']; ?>&qyt=<?php echo $items['qyt']; ?>" class="btn btn-primary"><i class="ri-edit-box-line"></i></a>

                                            <a href="adds/del_product.php?id=<?php echo $items['id']; ?>" class="btn btn-danger delete_btn"><i class="ri-delete-bin-line"></i></a>
                                        </td>
                                    </tr>
                             <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="7" style="text-align: center;">No Data Found..!!</td>
                                </tr>
                                <?php
                                }
                            }

                    ?>

                    <?php 
                    
                        $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                        if(isset($_POST['view'])){

                            $sql = "SELECT * FROM producttb";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) < 1){
                                ?>
                                <tr>
                                    <td colspan="5" style="text-align: center;">NO data found..!!</td>
                                </tr>
                                <?php
                            }
                            else{
                                
                                foreach($result as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo $row['product_price']; ?></td>
                                        <td class="tdImgbox"><img src="uploads/<?php echo $row['product_image']; ?>" alt=""></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td><?php echo $row['qyt']; ?></td>
                                        <td>
                                            <a href="edit/edit_product.php?id=<?php echo $row['id']; ?>&product_name=<?php echo $row['product_name']; ?>&product_price=<?php echo $row['product_price']; ?>&product_image=<?php echo $row['product_image']; ?>&category=<?php echo $row['category']; ?>&qyt=<?php echo $row['qyt']; ?>" class="btn btn-primary"><i class="ri-edit-box-line"></i></a>

                                            <a href="adds/del_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger delete_btn"><i class="ri-delete-bin-line"></i></a>
                                        </td>
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