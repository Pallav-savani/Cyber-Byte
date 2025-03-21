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
                <h1 class="page-header">Products - Details</h1>
            </div>

            <div class="search_container">
                <form action="" method="get" class="form1">
                    <input type="text" required placeholder="Search.." name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>">
                    <button type="submit" name="submit" class="go_btn" >Search <i class="ri-search-2-line"></i></button>
                    <!-- <a href="products.php" class="go_btn">View All <i class="ri-eye-line"></i></a> -->
                </form>
                <form action="" method="post" class="form2">
                    <input type="hidden" name="view" value="<?php if(isset($_POST['view'])){ echo $_POST['view']; } ?>">
                    <button type="submit" name="submit" class="go_btn1">View All <i class="ri-eye-line"></i></button>
                </form>
            </div>
            <hr>

            <div class="table_content">
            <!-- Table -->
            <table class="table table-striped table-bordered table-condensed" style="width: max-content;">
                <div class="add_container">
                    <a href="adds/add-pro_details.php" class="cus_add_btn">
                        <button><i class="ri-add-fill"></i> Add new</button>
                    </a>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product image</th>
                        <th>Product Price</th>
                        <th>Product Specification</th>
                        <th>Product Specification</th>
                        <th>Product Specification</th>
                        <th>Product Specification</th>
                        <th>Product Specification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $conn = mysqli_connect("localhost", "root", "", "cyberbyte");

                        if(isset($_GET['search'])){
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM detail WHERE CONCAT(id,name,spec1,spec2,spec3,spec4,spec5) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($conn, $query);
                        
                            if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $items){
                                    ?>
                                    <tr>
                                        <td><?php echo $items['id']; ?></td>
                                        <td><?php echo $items['name']; ?></td>
                                        <td><?php echo $items['image']; ?></td>
                                        <td><?php echo $items['price']; ?></td>
                                        <td><?php echo $items['spec1']; ?></td>
                                        <td><?php echo $items['spec2']; ?></td>
                                        <td><?php echo $items['spec3']; ?></td>
                                        <td><?php echo $items['spec4']; ?></td>
                                        <td><?php echo $items['spec5']; ?></td>
                                        <td>
                                            <a href="edit/edit-pro_details.php?id=<?php echo $items['id']; ?>&name=<?php echo $items['name']; ?>&image=<?php echo $items['image']; ?>&price=<?php echo $items['price']; ?>&spec1=<?php echo $items['spec1']; ?>&spec2=<?php echo $items['spec2']; ?>&spec3=<?php echo $items['spec3']; ?>&spec4=<?php echo $items['spec4']; ?>&spec5=<?php echo $items['spec5']; ?>" class="btn btn-primary"><i class="ri-edit-box-line"></i></a>
                                
                                            <a href="adds/del_detail_product.php?id=<?php echo $items['id']; ?>" class="btn btn-danger delete_btn"><i class="ri-delete-bin-line"></i></a>
                                        </td>
                                    </tr>
                             <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="10" style="text-align: center;">No Data Found..!!</td>
                                </tr>
                                <?php
                                }
                            }
                        
                        ?>

                        <?php 
                        
                        $con = mysqli_connect("localhost", "root", "", "cyberbyte");
                                                
                        if(isset($_POST['view'])){
                        
                            $sql = "SELECT * FROM detail";
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
                                        <td><?php echo $row['name']; ?></td>
                                        <td class="detailImgbox"><img src="uploads/<?php echo $row['image']; ?>" alt=""></td>
                                        <!-- <td><?php /* echo $row['image']; */ ?></td> -->
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['spec1']; ?></td>
                                        <td><?php echo $row['spec2']; ?></td>
                                        <td><?php echo $row['spec3']; ?></td>
                                        <td><?php echo $row['spec4']; ?></td>
                                        <td><?php echo $row['spec5']; ?></td>
                                        <td>
                                            <a href="edit/edit-pro_details.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&image=<?php echo $row['image']; ?>&price=<?php echo $row['price']; ?>&spec1=<?php echo $row['spec1']; ?>&spec2=<?php echo $row['spec2']; ?>&spec3=<?php echo $row['spec3']; ?>&spec4=<?php echo $row['spec4']; ?>&spec5=<?php echo $row['spec5']; ?>" class="btn btn-primary"><i class="ri-edit-box-line"></i></a>
                                
                                            <a href="adds/del_detail_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger delete_btn"><i class="ri-delete-bin-line"></i></a>
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