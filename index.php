<!DOCTYPE html>
<html class="no-js">

<body>


  <?php
  // session_start();
  include_once "header.php";

  // echo $_SESSION['users'];
  ?>




  <!-- Carousel
    ================================================== -->
  <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#homeCarousel" data-slide-to="1"></li>
      <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">

        <img src="assets/images/slider/home-slider-1.jpg" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->


      <div class="item ">

        <img src="assets/images/slider/home-slider-2.jpg" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->




      <div class="item ">

        <img src="assets/images/slider/home-slider-3.jpg" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">A penny is a lot of money, if you have not got a penny.</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div><!-- /.carousel -->

  <div class="section-home home-reasons">

    <div class="container">

      <div class="row">

        <div class="col-md-6">

          <div class="reasons-col animate-onscroll fadeIn">

            <img src="assets/images/reasons/we-fight-togother.jpg" alt="">

            <div class="reasons-titles">

              <h3 class="reasons-title">Services</h3>
              <h5 class="reason-subtitle">We are humans</h5>

            </div>

            <div class="on-hover hidden-xs">

              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>


              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>

              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>

            </div>
          </div>

        </div>


        <div class="col-md-6">

          <div class="reasons-col animate-onscroll fadeIn">

            <img src="assets/images/reasons/we-care-about.jpg" alt="">

            <div class="reasons-titles">

              <h3 class="reasons-title">Donation</h3>
              <h5 class="reason-subtitle">We are humans</h5>

            </div>

            <div class="on-hover hidden-xs">

              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>


              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>

              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur praesentium, itaque facilis nesciunt ab omnis cumque similique ipsa veritatis perspiciatis, harum ad at nihil molestias, dignissimos sint consequuntur. Officia, fuga.</p>

            </div>


          </div>

        </div>


      </div>



    </div>


  </div> <!-- /.home-reasons -->

  <div class="section-home about-us fadeIn animated">

    <div class="container">
      <h2 class="title-style-1">Our Services <span class="title-under"></span></h2>
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

      </div>

    </div>

  </div> <!-- /.about-us -->

  <div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

      <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

      <div class="row">
        <?php
        include_once "events.php";
        $event = new events();

        ?>
        <div class="col-md-3 col-sm-6">

          <div class="cause">

            <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

            <div class="progress cause-progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                10$ / 500$
              </div>
            </div>

            <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
            <div class="cause-details">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
            </div>

            <div class="btn-holder text-center">

              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

            </div>



          </div> <!-- /.cause -->

        </div>


      </div>

    </div>

  </div> <!-- /.our-causes -->






  <div class="section-home our-sponsors animate-onscroll fadeIn">

    <div class="container">

      <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

      <ul class="owl-carousel list-unstyled list-sponsors">

        <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
        <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
        <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

        <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
        <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
        <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

      </ul>

    </div>

  </div> <!-- /.our-sponsors -->





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