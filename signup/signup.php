<?php
    include("../security/s.php");
?>

<?php
include("../connection/connect.php");
if(!$con){
die("connection faild:".mysqli_connect_error());
}
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $checkuser="select * from login where email='$email'";
    $checkuser1="select * from login where password='$password'";
    $result1=mysqli_query($con,$checkuser);
    $result2=mysqli_query($con,$checkuser1);
    $count=mysqli_num_rows($result1);
    $count1=mysqli_num_rows($result2);
    if($count>0)
    {
        echo"<script>alert('Email ID alredy register..!!');window.location='../signup/signup.html';</script>";
   
    }
    if($count>0)
    {
        echo"<script>alert('email alredy register');window.location='../signup/signup.html';</script>";
    }
    else 
    {
        $sql_query="insert into login(email,password)values('$email','$password')";
        if (mysqli_query ( $con , $sql_query ) )
        {
            echo"<script>alert('Register Successfull..!!');window.location='../login/login.html';</script>";
        }
        else
        {
           echo "ERROR:". $Sql ."". mysqli_error($con);
        }
    }
    mysqli_close($con);
}
?>