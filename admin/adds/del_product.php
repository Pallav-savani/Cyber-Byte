<?php
    include("../../security/s.php");
?>

<?php

include("../connect/admin-connect.php");

if(!$con){
    die("connection faild:".mysqli_connect_error());
}

if(isset($_POST['delete']))
{
    $productid=$_POST['product_id'];
    $checkuser="SELECT * FROM producttb WHERE id='$productid'";
    $result1=mysqli_query($con,$checkuser);

    $count=mysqli_num_rows($result1);
    if($count>0)
    {
        $sql_query="DELETE FROM producttb WHERE id = '$productid'";
        if (mysqli_query ( $con , $sql_query ) )
        {
            echo"<script>alert('Product Deleted Succsessfully..!!');window.location='../products.php';</script>";
        }
        else
        {
           echo "ERROR:". $Sql ."". mysqli_error($con);
        }
   
    }
    else 
    {
        echo"<script>alert('Product alredy Deleted..!!');window.location='del_product.php';</script>";
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
        <form action="del_product.php" method="post" class="from_content">
            <h2>Delete Product</h2>
            <hr>

            <div class="input-box">
                <label>Product ID</label>
                <input type="text" required name="product_id" id="idTextbox" autocomplete="off" placeholder="Enter Product ID">
            </div>

            <button type="submit" name="delete" class="del_pro">Delete Product</button>

        </form>
    </div>

</section>

<?php
    include("../admin_footer.php");
?>

    <script>
        // Function to get query parameter value by name
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Get the 'id' parameter from the URL
        const id = getQueryParam('id');

        // If 'id' is found, set it in the textbox
        if (id) {
            document.getElementById('idTextbox').value = id;
        } else {
            document.getElementById('idTextbox').value = 'ID not found';
        }
    </script>
</body>
</html>