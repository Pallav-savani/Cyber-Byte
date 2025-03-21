<?php
    include("../../security/s.php");
?>

<?php
include("../connect/admin-connect.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Edit'])) {
    $productid = $_POST['product_id'];
    $productname = $_POST['product_name'];
    $productprice = $_POST['product_price'];
    $productcategory = $_POST['category'];
    $stock = $_POST['qyt'];

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
        $sql_query = "UPDATE producttb SET product_name=?, product_price=?, product_image=?, category=?, qyt=? WHERE id=?";
        
        if ($stmt = mysqli_prepare($con, $sql_query)) {
            mysqli_stmt_bind_param($stmt, 'ssssis', $productname, $productprice, $productimage, $productcategory, $stock, $productid);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Product updated successfully!');window.location='../products.php';</script>";
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
        <form action="edit_product.php" method="post" enctype="multipart/form-data" class="from_content">
            <h2>Edit Products</h2>
            <hr>

            <div class="input-box">
                <label>Product ID</label>
                <input type="number" required name="product_id" id="proid" autocomplete="off" placeholder="Enter Product ID">
            </div>
            <div class="input-box">
                <label>Product Name</label>
                <input type="text" required name="product_name" id="proname" autocomplete="off" placeholder="Enter Product Name">
            </div>
            <div class="input-box">
                <label>Product Price</label>
                <input type="text" required name="product_price" id="proprice" autocomplete="off" placeholder="Enter Product Price">
            </div>
            <div class="upload">
                <label>Upload Image</label>
                <input type="file" required name="product_image" >
                <p style="display: none;" id="proimage"></p>
            </div>              
            <div class="input-box">
                <label>Product Category</label>
                <select name="category" id="procategory">
                    <option value=""> ----------------------------------- Select Category ----------------------------------- </option>
                    <option value="laptop">Laptop</option>
                    <option value="mobile">Mobile</option>
                    <option value="tablet">Tablet</option>
                    <option value="tv">Smart T.V</option>
                    <option value="drone">Drone</option>
                    <option value="camera">Camera</option>
                    <option value="watch">Smart Watches</option>
                    <option value="speaker">Speaker</option>
                    <option value="headphone">Headphone</option>
                    <option value="graphic">Graphics Card</option>
                    <option value="cabinet">PC Cabinet</option>
                    <option value="keyboard">Keyboard</option>
                    <option value="mouse">Mouse</option>
                    <option value="motherboard">Motherboard</option>
                    <option value="wifi">Router</option>
                    <option value="ssd">SSD</option>
                    <option value="RAM">RAM</option>
                    <option value="power">Power Supply</option>
                    <option value="processor">Processor</option>
                    <option value="monitor">Monitor</option>
                </select>
            </div> 
            <div class="input-box">
                <label>Stock By Product</label>
                <input type="text" required name="qyt" id="prostock" autocomplete="off" placeholder="Enter Stock Amount">
            </div>

            <button type="submit" name="Edit" class="add_pro">Update Product</button>

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
        const name = getQueryParam('product_name');
        const price = getQueryParam('product_price');
        const image = getQueryParam('product_image');
        const category = getQueryParam('category');
        const stock = getQueryParam('qyt');

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
            document.getElementById('proimage').value = 'Image not found';
        }

        if (category) {
            document.getElementById('procategory').value = category;
        } else {
            document.getElementById('procategory').value = 'category not found';
        }

        if (stock) {
            document.getElementById('prostock').value = stock;
        } else {
            document.getElementById('prostock').value = 'Stock not found';
        }
    </script>
</body>
</html>