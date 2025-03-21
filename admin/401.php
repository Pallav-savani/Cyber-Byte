<?php
    include("../security/s.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 - Unauthorized</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    font-family: 'Jost', sans-serif;
    background-color: #e9e9e9;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.image_box{
    top: 40px;
    position: relative;
    width: 200px;
    height: 200px;
    overflow: hidden;
}
.image_box img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
h1, h2{
    position: relative;
    top: 40px;
}
.go-home{
    position: relative;
    top: 50px;
    padding: 5px 16px;
    font-size: 16px;
    font-weight: 500;
    background: red;
    border: 1px solid #000;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: .3s ease;
}
.go-home:hover{
  background-color: #c90808;
}

</style>
<body>
    <div class="image_box">
        <img src="admin-images/Danger.png" alt="">
    </div>
    <h1>401 Unauthorized</h1>
    <br>
    <h2>Authorization required</h2>

    <a href="index.php">
        <button class="go-home">Go back</button>
    </a>
</body>
</html>