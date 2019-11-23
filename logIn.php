<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<?php
include "users.php";

if (isset($_COOKIE['userCookie'])) {
    header('location:index.php');
}
// if (isset($_POST['btnLogIn'])) {
//     $user = new users();

//     $user->setUserName($_POST['userName']);
//     $user->setUserPhone($_POST['userName']);
//     $user->setUserEmail($_POST['userName']);
//     $user->setUserPassword($_POST['userPassword']);

//     $log = $user->Login();

//     if ($rows = mysqli_fetch_assoc($log)) {
//         if (isset($_POST['rememberMe'])) {
//             setcookie("userCookie", $_POST['userName'], time() + 60 * 60 * 24 * 365);
//         }
//         $_SESSION['users'] = $rows['FirstName'];
//         
?>
<script type="text/javascript">
    //             function onSubmitForm() {
    //                 $.get('header.php').success(function(html) {
    //                     $('#page1').html(html);
    //                 });
    //                 $.get('index.php').success(function(html) {
    //                     $('#page2').html(html);
    //                 });
    //             }
    //         
</script>

<!-- <div id="page1"></div>
 <div id="page2"></div> -->
<?php
//         // echo "<script>
//         //         window.open('header.php','_parent');
//         //         // window.open('index.php','_parent');
//         //         </script>";
//     }
//     // header("Location: index.php");
//     // echo ("<h4 style='text-align:center'> Ok</h4>");
//     else
//         echo ("<h4 style='text-align:center'> Invaild</h4>");
// }
?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/sign.css" rel='stylesheet' type='text/css' />
</head>

<body>
    <?php include_once "header.php" ?>
    <h1>Queer Login Form</h1>

    <div class="w3_frm">
        <!---728x90--->
        <form id="login-form" action="#" method="post">
            <h3>Login Form</h3>

            <div class="field-w3-agile-grid leftf">
                <input type="text" name="userName" id="userName" placeholder="UserName / Phone / Email" required="" />
            </div>
            <div class="field-w3-agile-grid rightf">
                <input type="password" name="userPassword" id="userPassword" placeholder="PassWord" required="" />
            </div>
            <div class="field-w3-agile-grid rem">
                <input type="checkbox" value="" name="rememberMe">
                <label for="brand"><span></span>Remember me</label>
            </div>

            <input type="submit" name="btnLogIn" value="LOG IN">
        </form>

        <div id="feedback"></div>
    </div>

    <script>
        $('#login-form').on('submit', function(e) {
            e.preventDefault();

            var username = $(`#userName`).val().trim();
            var password = $(`#userPassword`).val().trim();



            $.ajax(`log1.php`, {
                method: `POST`,
                data: {
                    'btnLogIn': 'btnLogIn',
                    'userName': username,
                    'userPassword': password
                },
                success: function(data, textStatus, jqXHR) {
                    console.log(data);
                    login = JSON.parse(data);

                    // $('#feedback').html(login);
                    
                    window.location = "index.php";

                    // if (json_encode($_SESSION['users'])){
                    //     window.open("index.php", "_parent");
                    // }

                },
                error: function(jqXhr, textStatus, errorThrown) {
                    console.log("Error: ", errorThrown);
                }
            })


        });


        // })
    </script>

    <!--copyright-->
    <div class="copy-wthree">
        <p>© 2018 Queer Signup Form . All Rights Reserved | Design by
            <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
        </p>
    </div>
    <!--//copyright-->
    <?php


    ?>

    <?php include_once "footer.php"; ?>

    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')
    </script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

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