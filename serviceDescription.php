<!DOCTYPE html>
<html class="no-js">
<?php
include_once "services.php";
$service = new services();

$rs = $service->Search();

$rows = mysqli_fetch_assoc($rs);
?>

<body>
    <!-- NAVBAR
    ================================================== -->
    <?php include_once "header.php"; ?>

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title"><?php echo $rows['ServiceName']; ?><span class="title-under"></span></h1>
            <p class="page-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
            </p>

        </div>

    </div>

    <div class="main-container">

        <div class="container">

            <div class="row fadeIn animated">

                <div class="col-md-6">

                    <img src="assets/images/about-us.jpg" alt="" class="img-responsive">

                </div>

                <div class="col-md-6">

                    <h2 class="title-style-2">ABOUT SERVICE <span class="title-under"></span></h2>

                    <?php echo $rows['ServiceDetails']; ?><br>
                    <?php echo $rows['ServicePrice']; ?>

                </div>

            </div> <!-- /.row -->


        </div> <!-- /.about-us -->


        <div class="our-team animate-onscroll fadeIn">

            <div class="container">

                <h2 class="title-style-1">Recommended Providers <span class="title-under"></span></h2>

                <div class="row">

                    <div class="col-md-3 col-sm-6">

                        <div class="team-member">

                            <div class="thumnail">

                                <img src="assets/images/team/member-1.jpg" alt="" class="cause-img">

                            </div>



                            <h4 class="member-name"><a href="#">Robert C. Numbers</a></h4>

                            <div class="member-position">
                                CO-FOUNDER
                            </div>

                            <div class="btn-holder">

                                <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
                                <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                                <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
                                <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                                <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>

                            </div>



                        </div> <!-- /.team-member -->

                    </div>

                </div> <!-- /.row -->

            </div>

        </div>

        <div class="container">

            <div class="section-home about-us">

            <h2 class="title-style-1">Related Services <span class="title-under"></span></h2>
                <div class="row">

                    <div class="col-md-3 col-sm-6">

                        <div class="about-us-col">

                            <div class="col-icon-wrapper">
                                <img src="assets/images/icons/our-mission-icon.png" alt="">
                            </div>
                            <h3 class="col-title">our mission</h3>
                            <div class="col-details">

                                <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>

                            </div>
                            <a href="#" class="btn btn-primary"> Read more </a>

                        </div>

                    </div>


                </div> <!-- /.row -->


            </div>
        </div>


    </div>


    <?php include_once "footer.php"; ?>


    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')
    </script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>


    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
</body>

</html>