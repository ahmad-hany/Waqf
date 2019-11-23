<?php

include "users.php";
session_start();
if (isset($_POST['btnLogIn'])) {
    $user = new users();

    $user->setUserName($_POST['userName']);
    $user->setUserPhone($_POST['userName']);
    $user->setUserEmail($_POST['userName']);
    $user->setUserPassword($_POST['userPassword']);

    $log = $user->Login();

    if ($rows = mysqli_fetch_assoc($log)) {
        if (isset($_POST['rememberMe'])) {
            setcookie("userCookie", $_POST['userName'], time() + 60 * 60 * 24 * 365);
        }
        $_SESSION['users'] = $rows['Username'];
        $_SESSION['usersFirstName'] = $rows['FirstName'];
        echo(json_encode($_SESSION['users']));
        // echo 'window.open("index.php", "_parent");';
        // header("location: index.php");

    } else
        echo(json_encode("<h4 style='text-align:center'> Invaild </h4>"));

}



