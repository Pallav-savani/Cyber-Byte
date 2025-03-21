<?php
    include("../../security/s.php");
?>

<?php
include("../connect/admin-connect.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Edit-detail'])) {
    $productid=$_POST['product_id'];
    $productname=$_POST['product_name'];
    $productprice=$_POST['product_price'];
    $productspec1=$_POST['product_spec1'];
    $productspec2=$_POST['product_spec2'];
    $productspec3=$_POST['product_spec3'];
    $productspec4=$_POST['product_spec4'];
    $productspec5=$_POST['product_spec5'];

    $folder = '../uploads/';
    $productimage = $_FILES['product_image']['name'];
    $fileTmpPath = $_FILES['product_image']['tmp_name'];
    $target_file = $folder . basename($productimage);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($imageFileType, $allowedExtensions)) {
        die('Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.');
    }

    if (move_uploaded_file($fileTmpPath, $target_file)) {
        $sql_query="UPDATE detail SET name=?, price=?, image=?, spec1=?, spec2=?, spec3=?, spec4=?, spec5=? WHERE id = ? ";
        
        if ($stmt = mysqli_prepare($con, $sql_query)) {
            mysqli_stmt_bind_param($stmt, 'sssssssss', $productname, $productprice, $productimage, $productspec1, $productspec2, $productspec3, $productspec4, $productspec5, $productid);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Product detail updated successfully!');window.location='../pro-detail.php';</script>";
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
        <form action="edit-pro_details.php" method="post" enctype="multipart/form-data" class="from_content">
            <h2>Edit Products</h2>
            <hr>

            <div class="input_content">
                <div class="input_id">
                    <label>Product ID</label>
                    <input type="number" required name="product_id" id="proid" autocomplete="off" placeholder="Enter Product ID">
                </div>
                <div class="input-box">
                    <label>Product Name</label>
                    <input type="text" required name="product_name" id="proname" autocomplete="off" placeholder="Enter Product Name">
                </div>
            </div>

            <div class="input_content">
                <div class="input_id">
                    <label>Product Price</label>
                    <input type="text" required name="product_price" id="proprice" autocomplete="off" placeholder="Enter Product Price">
                </div>
                <div class="upload">
                    <label>Upload Image</label>
                    <input type="file" required name="product_image" >
                    <p style="display: none;" id="proimage"></p>
                </div>  
            </div>

            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="product_spec1" id="prospec1" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="product_spec2" id="prospec2" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="product_spec3" id="prospec3" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="product_spec4" id="prospec4" autocomplete="off" placeholder="Write Specs about product">
            </div>
            <div class="input-box">
                <label>Add Specification</label>
                <input type="text" required name="product_spec5" id="prospec5" autocomplete="off" placeholder="Write Specs about product">
            </div>

            <button type="submit" name="Edit-detail" class="add_pro">Update Product Details</button>

        </form>
    </div>

</section>

<?php
    include("../admin_footer.php");
?>

    <script>
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const id = getQueryParam('id');
        const name = getQueryParam('name');
        const price = getQueryParam('price');
        const image = getQueryParam('image');
        const spec1 = getQueryParam('spec1');
        const spec2 = getQueryParam('spec2');
        const spec3 = getQueryParam('spec3');
        const spec4 = getQueryParam('spec4');
        const spec5 = getQueryParam('spec5');

        if (id) {
            document.getElementById('proid').value = id;
        } else {
            document.getElementById('proid').value = 'ID not found';
        }

        if (name) {
            document.getElementById('proname').value = name;
        } else {
            document.getElementById('proname').value = 'Name not found';
        }

        if (price) {
            document.getElementById('proprice').value = price;
        } else {
            document.getElementById('proprice').value = 'price not found';
        }

        if (image) {
            document.getElementById('proimage').value = image;
        } else {
            document.getElementById('proimg').value = 'Image not found';
        }

        if (spec1) {
            document.getElementById('prospec1').value = spec1;
        } else {
            document.getElementById('prospec1').value = 'Content not found';
        }

        if (spec2) {
            document.getElementById('prospec2').value = spec2;
        } else {
            document.getElementById('prospec2').value = 'Content not found';
        }

        if (spec3) {
            document.getElementById('prospec3').value = spec3;
        } else {
            document.getElementById('prospec3').value = 'Content not found';
        }

        if (spec4) {
            document.getElementById('prospec4').value = spec4;
        } else {
            document.getElementById('prospec4').value = 'Content not found';
        }

        if (spec5) {
            document.getElementById('prospec5').value = spec5;
        } else {
            document.getElementById('prospec5').value = 'Content not found';
        }

    </script>
</body>
</html>