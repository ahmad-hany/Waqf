<!DOCTYPE html>
<html class="no-js">
<?php include_once "users.php"; 
session_start();
?>

<head>
  <meta charset="utf-8">
  <title>SADAKA | Charity / Non-profit responsive Bootstrap HTML5 template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php //condition depending on the page ?>
  
  <?php //ending condition ?>
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootsrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">

  <!-- Template main Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Modernizr -->
  <script src="assets/js/modernizr-2.6.2.min.js"></script>


</head>


<header class="main-header">


  <nav class="navbar navbar-static-top">

    <div class="navbar-top">

      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-xs-12">

            <ul class="list-unstyled list-inline header-contact">
              <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
              <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
            </ul> <!-- /.header-contact  -->

          </div>

          <div class="col-sm-6 col-xs-12 text-right">

            <ul class="list-unstyled list-inline header-social">

              <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
              <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
              <li> <a href="#"> <i class="fa fa-google"></i> </a> </li>
              <li> <a href="#"> <i class="fa fa-youtube"></i> </a> </li>
              <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i> </a> </li>
            </ul> <!-- /.header-social  -->

          </div>


        </div>
      </div>

    </div>

    <div class="navbar-main">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="index.php"><img src="assets/images/sadaka-logo.png" alt=""></a>

        </div>

        <div id="navbar" class="navbar-collapse collapse pull-right">

          <ul class="nav navbar-nav">

            <li><a class="is-active" href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li class="has-child"><a href="#">CAUSES</a>

              <ul class="submenu">
                <li class="submenu-item"><a href="causes.php">Causes list </a></li>
                <li class="submenu-item"><a href="causes-single.php">Single cause </a></li>
                <li class="submenu-item"><a href="causes-single.php">Single cause </a></li>
                <li class="submenu-item"><a href="causes-single.php">Single cause </a></li>
              </ul>

            </li>
            <li><a href="servicesPage.php">SERVICES</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <?php if (isset($_SESSION['usersFirstName'])) { ?>
              <li>
                <a href="profile.php">
                  WELCOME &nbsp;
                  <?php
                    // if (!isset($_SESSION['users'])) {
                    //   header('location:login.php');
                    // } else {
                      echo $_SESSION['usersFirstName'];
                    // }
                    ?>
                </a>
              </li>
              <li><a href="logOut.php">LOG OUT</a></li>
                  <?php }else { ?>
              <li><a href="signUp.php">SIGN UP</a></li>
              <li><a href="logIn.php">LOG IN</a></li>
                  <?php } ?>
          </ul>

        </div> <!-- /#navbar -->

      </div> <!-- /.container -->

    </div> <!-- /.navbar-main -->


  </nav>

</header> <!-- /. main-header -->




</html>