<?php

$s = "localhost";
$u = "root";
$p = "";
$db1 = "cyberbyte";

// Establish connection to the database
$con1 = mysqli_connect($s, $u, $p, $db1);

// Check connection
if (!$con1) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the SQL query to join producttb with detail and get the quantity (qyt)
$sql1 = "SELECT p.qyt, d.*
         FROM producttb p
         JOIN detail d ON p.id = d.id";

// Execute the query
$result1 = mysqli_query($con1, $sql1);

if(mysqli_num_rows($result1)>0)
{
    return $result1;
}

// Close the connection
mysqli_close($con1);

?>
