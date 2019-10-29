<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("adminauth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    $name = stripslashes($_REQUEST['name']); // removes backslashes
    $name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con,$address);
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone);
    $submittedby = $_SESSION["username"];
    $query = "INSERT into `customer` ( name, email, password,address,phone) VALUES ('$name', '$email','".md5($password)."','$address','$phone')";
mysqli_query($con,$query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='adview.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Insert New Record</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p><a href="control.php">Dashboard</a> | <a href="adview.php">View Records</a> | <a href="logout.php">Logout</a>
        </p>

        <div>
            <h1>Insert New Record</h1>
            <form name="form" method="post" action="">
                <input type="hidden" name="new" value="1" />
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <textarea rows="3" col="30" name="address" placeholder="Address" required /></textarea>
                <input type="text" name="phone" placeholder="Phone Number" required />
                <input type="password" name="password" placeholder="Password" required />
                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
            <p style="color:#FF0000;"><?php echo $status; ?></p>

            <br /><br /><br /><br />
            <a
                href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial
                Link</a> <br /><br />
            For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
        </div>
    </div>
</body>

</html>