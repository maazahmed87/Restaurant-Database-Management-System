<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
