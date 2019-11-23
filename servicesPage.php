<!DOCTYPE html>
<html class="no-js">
<?php include_once "services.php"; ?>

<body>
    <!-- NAVBAR
    ================================================== -->

    <?php include_once "header.php"; ?>

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">SERVICES <span class="title-under"></span></h1>
            <p class="page-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
            </p>

        </div>

    </div>

    <div class="main-container">

        <div class="container">

        <h2 class="title-style-1">Our Services <span class="title-under"></span></h2>

            <div class="section-home about-us">


                <div class="row">
                    <?php
                    $service= new services();
                    
                    $rs = $service->Search();

                    while ($rows = mysqli_fetch_assoc($rs)) {
                    ?>
                    <div class="col-md-3 col-sm-6">

                        <div class="about-us-col">

                            <div class="col-icon-wrapper">
                                <img src="assets/images/icons/our-mission-icon.png" alt="">
                            </div>
                            <h3 class="col-title"><?php echo $rows['ServiceName'];?></h3>
                            <div class="col-details">

                                <p><?php echo $rows['ServiceDetails']; ?></p>

                            </div>
                            <a href="#" class="btn btn-primary"> Read more </a>

                        </div>

                    </div>
                    <?php } ?>





                </div> <!-- /.row -->


            </div>

        </div> <!-- /.about-us -->





    </div>


    <?php include_once "footer.php"; ?>
    <?php include_once "scripts.php"; ?>
</body>

</html>