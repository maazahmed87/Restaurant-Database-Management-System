<?php
require('db.php');
$cust_id=$_REQUEST['cust_id'];
$query = "DELETE FROM customer WHERE cust_id=$cust_id"; 
$result = mysqli_query($con,$query) or die ( mysql_error());
header("Location: adview.php"); 
?>