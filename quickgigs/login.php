<?php include 'include/connection.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>QUICK GIG | Find and Hire Specialized Talenties</title>

        <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
    <body>
        <!--w3l-header-->
        <?php include 'include/header.php'; ?>
        <!-- //w3l-header -->
        <section class="w3l-about-breadcrumb text-left">
    <!-- <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container grid-breadcrumb py-2">
            <h2 class="title-big">Login</h2>
            <ul class="breadcrumbs-custom-path mt-md-2">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Login</li>
            </ul>
        </div>
    </div> -->
</section>
        <!--  services section -->

        <div class="w3l-about-us best-rooms py-5">
            <div class="container py-lg-5 py-sm-4">
                <h3 class="title-big text-center mb-md-5 mb-4" style="margin-top: 35px;">Login into your account</h3>
                <!-- SIRF TITLE KE LIYE RAKHA HOON
<div class="cont-details">
<p>Register Yourself</p>
<h3 class="title-big">My Details</h3>
</div>
-->             <div class="col-lg-9 col-md-6 grids-feature mt-md-0 mt-4">
                <form action="function.php" method="post" style="/*! padding-left: 170px; */margin-left: 380px;">
                    <div class="row mt-5">
                            <!-- <div class="col md-3"> </div> -->
                        <div class="maghny-gd-1 col-lg-10 col-md-6">
                            
                            <input type="email" class="form-control mb-3"
                             name="email" value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email']; } ?>" placeholder="Enter Your Email">
                            <input type="password" class="form-control mb-3"  name="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password']; } ?>" placeholder="Password">
                       
                            <input type="submit" name="loginbutton" value="Login Now" class="btn btn-primary mt-4"><br><br><br>
                        


                            <!-- <div class="col-md-3"> </div> -->
                        </div>
                         <a href="signup.php" style="margin-bottom: 6px;">Not registered yet?</a>

                                                     <!-- commented  <div class="maghny-gd-1 col-lg-6 col-md-6"> 
                                                     <div class="mb-3"><
                                                     /div>
                                                    </div>  --> 
                        
                    </div>
                     <a href="admin.php" style="margin-left: -15px;">Login As Admin.</a>
                </form>
            </div>
        </div>
    </div>
        <!-- footer -->
        <?php include 'include/footer.php' ; ?>
        <!-- /footer -->      
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->


        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function () {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script -->

        <!-- script for owlcarousel -->
        <script>
            $(document).ready(function () {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script for owlcarousel -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>


        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <script src="assets/js/bootstrap.min.js"></script>

    </body>

</html>