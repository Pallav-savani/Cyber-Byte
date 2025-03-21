<?php

$s="localhost";
$u="root";
$p="";
$db1="cyberbyte";
$con1= mysqli_connect($s,$u,$p,$db1);
/* get product from daTABES*/
$sql1="select * from detail";
$result1=mysqli_query($con1,$sql1);
if(mysqli_num_rows($result1)>0)
{
    return $result1;
}

?>