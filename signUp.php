<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "users.php";
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link href="css/sign.css" rel='stylesheet' type='text/css' />
</head>

<body>
	<?php include_once "header.php" ?>
	<h1>Queer Signup Form</h1>

	<div class="w3_frm">
		<!---728x90--->
		<form action="#" method="post">
			<h3>Signup Form</h3>
			<div class="w3l_gen">
				<h5>User Type :</h5>
				<div class="w3_ml">
					<!---728x90--->
					<input type="radio" name="userType" value="Client" id="client" onclick="javascript:CheckType();">
					<label for="brand"><span></span>Client</label>
				</div>

				<div class="w3_fl">
					<input type="radio" name="userType" value="Organization" id="organization" onclick="javascript:CheckType();">
					<label for="brand"><span></span>Organization</label>
				</div>
			</div>
			<div class="field-w3-agile-grid leftf">
				<input type="text" name="userName" placeholder="UserName" required="" />
			</div>
			<div class="field-w3-agile-grid leftf">
				<input type="text" name="userFirstName" placeholder="FirstName" required="" />
			</div>
			<!---728x90--->
			<div class="field-w3-agile-grid leftf">
				<input type="text" name="userLastName" placeholder="LastName" required="" />
			</div>
			<div class="field-w3-agile-grid leftf">
				<input type="text" name="userPhone" placeholder="PhoneNumber" required="" />
			</div>
			<div class="field-w3-agile-grid leftf">
				<input type="email" name="userEmail" placeholder="E-mail" required="" />
			</div>
			<div class="field-w3-agile-grid rightf">
				<input type="password" name="userPassword" placeholder="PassWord" required="" />
			</div>
			<div class="field-w3-agile-grid rightf">
				<input type="password" name="userPassword" placeholder="Confirm PassWord" required="" />
			</div>
			<div class="divorganization" style="display:none">
				<div class="field-w3-agile-grid leftf">
					<input type="text" name="userTaxRecord" placeholder="Tax record" required="" />
				</div>
			</div>
			<div class="field-w3-agile-grid rem">
				<input type="checkbox" value="">
				<label for="brand"><span></span>I Accept to the Terms and Conditions</label>
			</div>

			<input type="submit" name="btnSignUp" value="SIGNUP">
		</form>


	</div>
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2018 Queer Signup Form . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
	<!--//copyright-->
	<?php


	if (isset($_POST['btnSignUp'])) {
		$user = new users();
		$user->setUserType($_POST['userType']);
		$user->setUserName($_POST['userName']);
		$user->setUserFirstName($_POST['userFirstName']);
		$user->setUserLastName($_POST['userLastName']);
		$user->setUserPhone($_POST['userPhone']);
		$user->setUserEmail($_POST['userEmail']);
		$user->setUserPassword($_POST['userPassword']);
		$user->setUserTaxRecord($_POST['userTaxRecord']);

		$msg = $user->Add();
		if (strpos($msg, 'PRIMARY'))
			echo ("<h4 style='text-align:center'>This user is exist</h4>" . $msg);
		else if (strpos($msg, 'Phone'))
			echo ("<h4 style='text-align:center'>This phone is exist</h4>" . $msg);
		else if (strpos($msg, 'Email'))
			echo ("<h4 style='text-align:center'>This email is exist</h4>" . $msg);
		else
			echo ("<h4 style='text-align:center'>" . $msg . "</h4>");
	}
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
	<script type="text/javascript">
		function CheckType() {
			if (document.querySelector('#organization').checked) {
				document.querySelector('.divorganization').style.display = 'block';
			} else if (document.querySelector('#client').checked) {
				document.querySelector('.divorganization').style.display = 'none';
			}
		}
	</script>
</body>

</html>