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
                if ($rows) {
                    ?>
                    <div>
                        <span>Username:</span>
                        <?php echo $rows['Username']; ?>
                    </div>
                    <div>
                        <span>User Type:</span>
                        <?php echo $rows['UserType']; ?>
                    </div>
                    <div>
                        <span>First Name:</span>
                        <?php echo $rows['FirstName']; ?>
                    </div>
                    <div>
                        <span>Last Name:</span>
                        <?php echo $rows['LastName']; ?>
                    </div>
                    <div>
                        <span>Phone No:</span>
                        <?php echo $rows['PhoneNo']; ?>
                    </div>
                    <div>
                        <span>E-mail:</span>
                        <?php echo $rows['Email']; ?>
                    </div>
                    <?php if($rows['UserType']=="Organization"){ ?>
                    <div>
                        <span>Tax Record:</span>
                        <?php echo $rows['TaxRecord']; ?>
                    </div>
                    <?php } ?>
                    <div>
                        <a href="profileEdit.php" style="text-align: right">Edit Profile</a>
                    </div>
                <?php } ?>
            </div> <!-- /.row -->


        </div>



    </div>


    <?php include_once "footer.php"; ?>
    <?php include_once "scripts.php"; ?>
</body>

</html>