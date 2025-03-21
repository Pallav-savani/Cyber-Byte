<?php

$s="localhost";
$u="root";
$p="";
$db="cyberbyte";
$con= mysqli_connect($s,$u,$p,$db);
/* get product from daTABES*/
$sql="select * from producttb";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    return $result;
}

?>