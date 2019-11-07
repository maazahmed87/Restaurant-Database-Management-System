<?php 
require('db.php');
include("auth.php");
$email=$_SESSION['email'];

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$res_date = $_POST['res_date']; // removes backslashes
$no_of_ppl = $_REQUEST['no_of_ppl'];		
$res_time = $_REQUEST['res_time'];
$email = $_SESSION["email"];
$vip_id=$_REQUEST['vip_id'];
$ins_query="insert into reservation (`res_date`,`no_of_ppl`,`res_time`,`email`,`vip_id`) values ('$res_date','$no_of_ppl','$res_time','$email','$vip_id')";

mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Your reservation has been booked</br>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Foodilite | Reservation</title>
    <link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet"
        type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Foodilite</title>
</head>

<body data-aos-easing="ease-out-back" data-aos-duration="1500" data-aos-delay="0">
    <nav class="navbar navbar-expand-md navbar-dark position-sticky-top fixed-top">
        <div class="canvas-area">
            <div class="head1">
                <a class="navbar-logo" href="#"><img src="img/logo.png"
                        style="height:35px; width: 214px;padding-top:1px"> </a></div>
            <div class="flot">
                <button class="navbar-toggler" type="button " style="float: right" data-toggle="collapse"
                    data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>

            <div class="collapse navbar-collapse text-right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <p><?php
            $query1="select name from customer where email='$email'";
            $nameg = mysqli_query($con,$query1);
            while ($row = mysqli_fetch_assoc($nameg)) {
                echo $row['name']."<br>";
            }?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section03" class="demo">
        <h1 style="font-family:'Sugar Candy';font-weight:bolder!important;font-size:95px;padding-top:40px;">Make Reservations</h1>
        <a href="#reservation"><span></span></a>
    </section>




    <div class="container-fluid" id="reservation">
        <form method="post" action="" name="reservation">
            <h1 class="chooseres" style="">Choose your options</h1>
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-4" id="blockres">

                    <input type="hidden" name="new" value="1" />
                    <input type="hidden" name="vip_id" value="1" />
                    <input type="date" name="res_date" required />
                    <input type="number" name="no_of_ppl" placeholder="Number of people" style="text-align:center"
                        required />
                    <input type="time" name="res_time" style="align-content:center" id="timepick" min="12:00"
                        max="24:00">
                    <label for="timepick"></label>
                    <span style="padding-top: 10px"><button>Book</button></span>

                </div>

                <div class="col-md-4"></div>
            </div>

        </form>
        <p class="flickr"><?php echo $status; ?></p>
    </div>





    <script>
        $(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });
    </script>
</body>

</html>