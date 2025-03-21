<?php
    include("../security/s.php");
?>

<?php
include("../connection/connect.php");
$email = $_POST['email_id'];  
$password = $_POST['admin_password'];  
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "SELECT * FROM adminlogin where email_id = '$email' and admin_password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><script>alert('Login Successfull..!!');</script></h1>";
        
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST['email_id'];
        $password = $_POST['admin_password'];

        $_SESSION['user_id'] = $email;
        $_SESSION['pass'] = $password;

        header("Location: admin-profile.php");
        exit;
     }
    }  
    else{  
        echo "<script>alert('No Admin Login Found..!');window.location='401.php';</script>";  
    }     
?>