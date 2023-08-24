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
            <h2 class="title-big">Hire Experts</h2>
            <ul class="breadcrumbs-custom-path mt-md-2">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Hire Experts</li>
            </ul>
        </div>
    </div> -->
</section>
        <!--  services section -->

        <div class="w3l-about-us best-rooms py-5">
            <div class="container py-lg-5 py-sm-4">
                <h3 class="title-big text-center mb-md-5 mb-4">Sign Up</h3>
                <!-- SIRF TITLE KE LIYE RAKHA HOON
<div class="cont-details">
<p>Register Yourself</p>
<h3 class="title-big">My Details</h3>
</div>
-->
                <form action="function.php" method="post" enctype="multipart/form-data" style="/*! padding-left: 170px; */margin-left: 380px;">
                    <div class="row mt-5">
                        <div class="maghny-gd-1 col-lg-6 col-md-6">
                            <input type="text" class="form-control mb-3" name="fname" placeholder="Enter Your First Name">
                            <input type="text" class="form-control mb-3"  name="lname" placeholder="Enter Your Last Name">
                            <input type="number" class="form-control mb-3"  name="mobile" placeholder="Enter Your Phone Number">
                            <input type="email" class="form-control mb-3" name="email" placeholder="Enter Your Email">
                            <input type="password" class="form-control mb-3"  name="password" placeholder="Password">
                            
                            
                            <!-- <select name="gig" id="" class="form-control mb-3">
                                <option value="">*** Select Your GIG ***</option>
                                <?php 
                                //connection waala code sabse upr hai.
                                $sql="select * from gig";
                                $result=$conn->query($sql);
                                while ($we=$result->fetch_object()) {
                                ?>
                                <option value="<?php echo $we->gid; ?>"><?php echo $we->developer; ?></option>
                                <?php } ?>
                            </select>
                            <textarea name="gname" id="gname" class="form-control mb-3" placeholder="Your GiG name" cols="30" rows="1"></textarea>

                                <select name="state" id="" class="form-control mb-3">
                                <option value="">*** Select Your State ***</option>
                                <?php 
                                //connection waala code sabse upr hai.
                                $sql="select * from state_list";
                                $result=$conn->query($sql);
                                while ($we=$result->fetch_object()) {
                                ?>
                                <option value="<?php echo $we->id; ?>"><?php echo $we->state; ?></option>
                                <?php } ?>
                                </select> 
                                
                                 <select name="city" id="" class="form-control mb-3">
                                <option value="">*** Select Your City ***</option>
                                <?php 
                                //connection waala code sabse upr hai.
                                $sql="select * from all_cities";
                                //-------------------------------------------------------------------
                                $result=$conn->query($sql);
                                while ($we=$result->fetch_object()) {
                                ?>
                                <option value="<?php echo $we->city_code; ?>"><?php echo $we->city_name; ?></option>
                                <?php } ?>
                                </select>

                                <select name="local" id="" class="form-control mb-3">
                                <option value="">*** Select Your Local Area ***</option>
                                <?php 
                                //connection waala code sabse upr hai.
                                $sql="SELECT * FROM `local_area` ORDER BY city_code ASC ";
                                //-------------------------------------------------------------------
                                $result=$conn->query($sql);
                                while ($we=$result->fetch_object()) {
                                ?>
                                <option value="<?php echo $we->lid; ?>"><?php echo $we->localname; ?></option>
                                <?php } ?>
                                </select> -->

                                <!-- <div class="mb-3">
                                <label>Profile Pic:</label>
                                <input type="file" class="form-control" name="myphoto">                           
                            </div> -->

                            <input type="submit" name="regibutton" value="Register Now" class="btn btn-primary mt-4">
                        </div>

                                                     <!-- commented  <div class="maghny-gd-1 col-lg-6 col-md-6"> 
                                                     <div class="mb-3"><
                                                     /div>
                                                    </div>  --> 
                        
                    </div>
                </form>
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