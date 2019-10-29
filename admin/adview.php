<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("adminauth.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p><a href="control.php">Home</a> | <a href="adinsert.php">Insert New Record</a> | <a
                href="logout.php">Logout</a></p>
        <h2>View Records</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>S.No</strong></th>
                    <th><strong>Name</strong></th>
                    <th><strong>Age</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
$count=1;
$sel_query="Select * from customer ORDER BY cust_id asc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td align="center"><?php echo $count; ?></td>
                    <td align="center"><?php echo $row["name"]; ?></td>
                    <td align="center"><?php echo $row["email"]; ?></td>
                    <td align="center"><?php echo $row["address"]; ?></td>
                    <td align="center"><?php echo $row["phone"]; ?></td>
                    <td align="center"><a href="adedit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                    <td align="center"><a href="addelete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
                <?php $count++; } ?>
            </tbody>
        </table>

        <br /><br /><br /><br />
        
</body>

</html>