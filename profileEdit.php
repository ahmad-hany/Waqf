<!DOCTYPE html>
<html class="no-js">

<body>
    <?php
    include_once "header.php";
    include_once "users.php";
    // session_start();



    ?>
    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">PROFILE<span class="title-under"></span></h1>
            <p class="page-description">
                You can see your data and manage it from here.
            </p>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">
                <?php
                $user = new users();
                $user->setUserName($_SESSION['users']);
                $user->setUserPhone($_SESSION['users']);
                $user->setUserEmail($_SESSION['users']);
                $rows = $user->checkUser();

                if (isset($_POST['btnSave'])) {
                    $user->setUserFirstName($_POST['userFirstName']);
                    $user->setUserLastName($_POST['userLastName']);
                    $user->setUserPhone($_POST['userPhone']);
                    $user->setUserEmail($_POST['userEmail']);
                    $user->setUserPassword($_POST['userPassword']);
                    $msg = $user->Update();
                    if (strpos($msg, 'Phone'))
                        echo ("<h4 style='text-align:center'>This phone is exist</h4>" . $msg);
                    else if (strpos($msg, 'Email'))
                        echo ("<h4 style='text-align:center'>This email is exist</h4>" . $msg);
                    else{
                        echo ("<h4 style='text-align:center'>" . $msg . "</h4>");
                        echo "<script>
                                window.open('profile.php','_parent');
                              </script>";
                    }
                        
                } elseif (isset($_POST['btnCancel'])) {
                    echo "<script>
                            window.open('profile.php','_parent');
                          </script>";
                }

                if ($rows) {
                    ?>
                    <form method="post">
                        <div>
                            <span>Username:</span>
                            <input type="text" value="<?php echo $rows['Username']; ?>" disabled>

                        </div>
                        <div>
                            <span>User Type:</span>
                            <input type="text" value="<?php echo $rows['UserType']; ?>" disabled>
                        </div>
                        <div>
                            <span>First Name:</span>
                            <input type="text" value="<?php echo $rows['FirstName']; ?>" name="userFirstName">
                        </div>
                        <div>
                            <span>Last Name:</span>
                            <input type="text" value="<?php echo $rows['LastName']; ?>" name="userLastName">
                        </div>
                        <div>
                            <span>Phone No:</span>
                            <input type="text" value="<?php echo $rows['PhoneNo']; ?>" name="userPhone">
                        </div>
                        <div>
                            <span>E-mail:</span>
                            <input type="email" value="<?php echo $rows['Email']; ?>" name="userEmail">
                        </div>
                        <div>
                            <span>Password:</span>
                            <input type="password" value="<?php echo $rows['Password']; ?>" name="userPassword">
                        </div>
                        <?php if ($rows['UserType'] == "Organization") { ?>
                            <div>
                                <span>Tax Record:</span>
                                <input type="text" value="<?php echo $rows['TaxRecord']; ?>" disabled>
                            </div>
                        <?php } ?>
                        <div>
                            <input type="submit" name="btnSave" value="Save">
                            <input type="submit" name="btnCancel" value="Cancel">
                        </div>
                    </form>
                <?php } ?>
            </div> <!-- /.row -->


        </div>



    </div>


    <?php include_once "footer.php"; ?>
    <?php include_once "scripts.php"; ?>
</body>

</html>