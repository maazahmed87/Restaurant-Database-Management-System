<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>registration</title>
</head>

<body>
    <?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>


    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" name="registration" method="post">
                <h1 style="padding-bottom: 20px">Create Account</h1>
                <input type="text" name="username" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />

                <input type="password" name="password" placeholder="Password" required />
                <p style="font-weight:bold">Want to login? <a href='login.php' style="color:#FF0000">Login here</a></p>
                <span style="padding-top: 10px"><button>Sign Up</button></span>
            </form>
        </div>
    </div>

    <div class="landing">
        <!---background-->
        <div class="opac">
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="index.html">Foodilite</a>
        </p>
    </footer>
    <?php } ?>