<?php
    include("../security/s.php");
?>

<?php
session_start();
include("connect/admin-connect.php");

if (!isset($_SESSION['user_id']) || !isset($_SESSION['pass'])) {
    header("Location: admin_login.php");
    exit;
}

$userid = $_SESSION['user_id'];
$password = $_SESSION['pass'];


// $conn = mysqli_connect("localhost", "root", "", "cyberbyte");

// $sql = "SELECT * FROM login ORDER BY 'name' DESC";
// $result = $conn->query($sql);


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
                <h1 class="page-header">Customers</h1>
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

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th width="45%">Name</th>
                        <th width="20%">Password</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 

                        $conn = mysqli_connect("localhost", "root", "", "cyberbyte");
        
                        if(isset($_GET['search'])){
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM login WHERE CONCAT(email,password) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($conn, $query);
            
                            if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $items){
                                    ?>
                                    <tr>
                                        <td><?php echo $items['email']; ?></td>
                                        <td><?php echo $items['password']; ?></td>
                                    </tr>
                             <?php
                                }
                            }
                            else{
                                ?>
                                <tr>
                                    <td colspan="2" style="text-align: center;">No Data Found..!!</td>
                                </tr>
                         <?php
                            }
                        }
                        
                    ?>

                    <?php 

                        $con = mysqli_connect("localhost", "root", "", "cyberbyte");

                        if(isset($_POST['view'])){

                            $sql = "SELECT * FROM login";
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
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }

                        }
                    
                    ?>
                </tbody>    
            </table>

        </div>
    </div>
</section>

<?php 
    include("admin_footer.php");
?>

</body>
</html>