<?php
    include("../../security/s.php");
?>

<?php
include("../connect/admin-connect.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert1'])) {
    $productid = $_POST['pro_id'];
    $productname = $_POST['pro_name'];
    $productprice = $_POST['pro_price'];
    $productspec1 = $_POST['pro_spec1'];
    $productspec2 = $_POST['pro_spec2'];
    $productspec3 = $_POST['pro_spec3'];
    $productspec4 = $_POST['pro_spec4'];
    $productspec5 = $_POST['pro_spec5'];


    $folder = '../uploads/';
    $productimage = $_FILES['pro_image']['name'];
    $fileTmpPath = $_FILES['pro_image']['tmp_name'];
    $target_file = $folder . basename($productimage);

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($imageFileType, $allowedExtensions)) {
        die('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    }

    if (move_uploaded_file($fileTmpPath, $target_file)) {
        $sql_query = "INSERT INTO detail (id, name, price, image, spec1, spec2, spec3, spec4, spec5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($con, $sql_query)) {
            mysqli_stmt_bind_param($stmt, "isissssss", $productid, $productname, $productprice, $productimage, $productspec1, $productspec2, $productspec3, $productspec4, $productspec5);

            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Product detail inserted successfully!'); window.location='../pro-detail.php';</script>";
            } else {
                echo "Error executing query: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading the file.";
    }

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - Administrator</title>
    <link rel="shortcut icon" href="../admin-images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adds.css">
</head>
<body>
<?php
    include("../connect/admin_header1.php");
?>

<section class="menu_section section">

<?php
    include("../connect/admin_sidebar1.php");
?>

    <div class="from_container">
        <h2>Add Products Details</h2>
        <hr>
        <form action="add-pro_details.php" method="post" enctype="multipart/form-data" class="from_content">

            <div class="input_content">
                <div class="input_id">
                    <label>Product ID</label>
                    <input type="number" required name="pro_id" autocomplete="off" placeholder="Enter Product ID">
                </div>
                <div class="input-box">
                    <label>Product Name</label>
                    <input type="text" required name="pro_name" autocomplete="off" placeholder="Enter Product Name">
                </div>
            </div>

            <div class="input_content">
                <div class="input_id">
                    <label>Product Price</label>
                    <input type="text" required name="pro_price" autocomplete="off" placeholder="Enter Product Price">
                </div>
                <div class="upload">
                    <label>Upload Image</label>
                    <input type="file" required name="pro_image">
                </div>     
            </div>

            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="pro_spec1" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="pro_spec2" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="pro_spec3" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="pro_spec4" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="pro_spec5" autocomplete="off" placeholder="Write Specs about product">
            </div>

            <button type="submit" name="insert1" class="add_pro">Add Products Detail</button>

        </form>
    </div>

</section>

<?php
    include("../admin_footer.php");
?>

</body>
</html>