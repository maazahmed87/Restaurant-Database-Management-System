<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<!doctype html>
<html lang="en">

<head>
    <link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet"
        type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
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
                        <a class="nav-link" href="#about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menus">menus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <p> <?php echo $_SESSION['email']; ?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="landing">
        <div class="opac">

            <div class="container-fluid">
                <div class="row" id="pop1">
                    <div class="col-sm-12" id="par1" data-aos=zoom-in>
                        <h3 class="stylish" style="color:#C6C505" data-aos=fade-right>Great Food</h3>
                        <a class="ct-btn-scroll ct-js-btn-scroll" href="#section2"><img alt="Arrow Down Icon"
                                src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="container" style="height:600px" id="about">
        <div class="second">
            <div class="second-head" data-aos=zoom-out>
                <h1 style="font-family:'Sugar Candy';font-size:65px;font-weight:bolder">Our Story</h>
            </div>
            <div class="row">
                <div class="col-sm-5" id="second-para" data-aos=zoom-in>
                    <p class="space">
                        The Euson and Roberts Families have created a unique dining experience in the quaint town of
                        Bright, Indiana. Our award winning chef brings us a quality, local driven menu aimed to please!
                        Relax and enjoy a nutritiously fresh meal or a hometown pub favorite in a heart-warming
                        environment. Bring your family and friends and enjoy life with us!
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="img/desert.jpg" style="height:50%; width=50%;padding-left:100px;">
                </div>
            </div>
        </div>
    </div>


    <!---------- Start Cuisines---------->

    <div class="container-fluid" style="background:#DCDB1D">


        <div class="second-head" data-aos=zoom-out>
            <h1 style="font-weight:bolder;font-size:65px">Wide range of cuisines to choose from</h>
        </div>
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-1">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    Turkish
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-2">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    italian
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-3">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    chinese
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-4">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    korean
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid" style="background:#DCDB1D">
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-5">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    french
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-6">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    mexican
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-7">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    american
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-8">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                    indian
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    <!----------End Cuisines---------->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scrollbar.js"></script>


    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: '1200'
        });
    </script>
    <script>
        mybutton = document.getElementByClassName("navbar");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 20) {
                navbar.style.opacity = "0.1";
            } else {
                navbar.style.opacity = "0.85";
            }
        }
    </script>

</body>

</html>