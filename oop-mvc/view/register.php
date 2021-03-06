<?php
include('/opt/lampp/htdocs/oop-mvc/controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['singup'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	if($password == $repassword){
		$user = $c_user->registerAccount($firstname, $lastname, $email, $password);
	}	
}
?>
<html>

<head>
	<title>Form User Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">
		<div class="col-md-4">
			<?php
		 if(isset($_SESSION['error'])){
			 echo"<div class = 'alert alert-danger'>".$_SESSION['error']."</div>";
		 } 
		 ?></div>
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="POST" action="#" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome Register
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter firstname">
						<input class="input100" type="text" name="firstname">
						<span class="focus-input100" data-placeholder="firstname"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter lastname">
						<input class="input100" type="text" name="lastname">
						<span class="focus-input100" data-placeholder="lastname"></span>
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="password"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter repassword">
						<input class="input100" type="password" name="repassword">
						<span class="focus-input100" data-placeholder="repassword"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="singup" class="login100-form-btn">
							Register
						</button>

					</div>

				</form>
			</div>

			<div id="dropDownSelect1"></div>

			<!--===============================================================================================-->
			<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/animsition/js/animsition.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/bootstrap/js/popper.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/select2/select2.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/daterangepicker/moment.min.js"></script>
			<script src="vendor/daterangepicker/daterangepicker.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/countdowntime/countdowntime.js"></script>
			<!--===============================================================================================-->
			<script src="js/main.js"></script>
		</div>
	</div>

</body>

</html>
