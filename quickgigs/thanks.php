<?php
 session_start();
 if(!isset($_SESSION['username']))
{   
    
    header("location: login.php");
}
$id=$_SESSION['username'];

?>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>QUICK GIG | Find and Hire Specialized Talenties</title>

        <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

         <link rel="stylesheet" href="assets/css/style-starter.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
<div class="jumbotron text-center" style="margin-bottom: 0px;">
  <h1 class="display-3">Thank You!</h1>
  <span class="lead"><b>Please check your email/sms</b> for further confirmation & payment.</span>
  <hr>
  <span>
    Having trouble? Contact us : <a href="">+(91)972-763-3633</a>
  </span><br><br>
  <p class="lead">
    <a class="btn btn-primary mb-1" href="index.php" role="button" style="background-color: #30c39e;border-color: #30c39e;">Continue to homepage</a>
  </p>
</div>
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