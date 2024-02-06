<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::to('/') }}/app_rab/login_style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/app_rab/login_style/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('app_rab/login_style/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::to('/') }}/app_rab/login_style/js/main.js"></script>

</body>
</html>