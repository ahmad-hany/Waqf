<!DOCTYPE html>
<html class="no-js">
<?php include_once "events.php"; ?>

<body>
    <!-- NAVBAR
    ================================================== -->

    <?php include_once "header.php"; ?>


    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">OUR CAUSES <span class="title-under"></span></h1>
            <p class="page-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
            </p>

        </div>

    </div>

    <div class="main-container">

        <div class="our-causes fadeIn animated">

            <div class="container">

                <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

                <div class="row">

                    <?php

                    $event = new events();

                    $event->getEventName();
                    $event->getEventType();
                    $event->getEventDetails();
                    $event->getEventTotal();
                    $event->getEventValue();
                    $event->getEventPercentage();

                    $rs = $event->Search();

                    while ($rows = mysqli_fetch_assoc($rs)) {
                        ?>
                        <div class="col-md-3 col-sm-6">

                            <div class="cause">

                                <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

                                <div class="progress cause-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rows['EventValue'] * 100 / $rows['EventTotal']; ?>%;color:#000;">
                                        <?php echo $rows['EventValue'] . "$&nbsp;/&nbsp;" . $rows['EventTotal'] . "$"; ?>
                                    </div>

                                </div>



                                <h4 class="cause-title"><a href="#"><?php echo $rows['EventName']; ?></a></h4>
                                <div class="cause-details">
                                    <?php echo $rows['EventDetails']; ?><br>
                                    
                                </div>

                                <div class="btn-holder text-center">

                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

                                </div>



                            </div> <!-- /.cause -->

                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </div> <!-- /.our-causes -->




    </div> <!-- /.main-container  -->


    <?php include_once "footer.php"; ?>


    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
                </div>
                <div class="modal-body">

                    <form class="form-donation">

                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span> </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="First name*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow">DONATE NOW</button>
                            </div>

                        </div>





                    </form>

                </div>
            </div>
        </div>

    </div> <!-- /.modal -->


    <?php include_once "scripts.php"; ?>
</body>

</html>