<?php
session_start();
if($_SESSION['Login'] == 'LOGIN'){
    header('Location: ./dashboard.php');

}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flixtv.volkovdesign.com/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 13:53:09 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/admin.css">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Aly Ahmad Shah | Dashboards</title>


	<!-- Include jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<!-- Include SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">

						<form class="sign__form" id="loginForm">
							<a href="index.php" class="sign__logo">
								ALY AHMAD SHAH
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" id="email" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" id="password" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember me</label>
							</div>

							<button class="sign__btn" type="button" onclick="submitForm()">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>

	<script>
		function submitForm() {
			var email = $("#email").val();
			var password = $("#password").val();

			// Perform form validation here if needed

			// AJAX request
			$.ajax({
				type: "POST",
				url: "../backend/login.php",
				data: {
					email: email,
					password: password
				},
				success: function(response) {
					// Handle the response from the server
					if (response === "success") {
						// Redirect to a new page or perform any other action
						Swal.fire({
							icon: 'success',
							title: 'Login Successful',
							showConfirmButton: false,
							timer: 1000
						}).then(function(e){
							window.location.href = "./dashboard.php"
						});
					} else {
						// Display an error message
						Swal.fire({
							icon: 'error',
							title: 'Login Failed',
							text: 'Invalid email or password',
						});
					}
				},
				error: function() {
					// Display an error message
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Something went wrong!',
					});
				}
			});
		}
	</script>
</body>

<!-- Mirrored from flixtv.volkovdesign.com/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 13:53:09 GMT -->

</html>