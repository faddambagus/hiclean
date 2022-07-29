<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>HI_CLEAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
	<link rel="stylesheet" href="assets/plugins/slick/slick.css">
	<link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="assets/plugins/colorbox/colorbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
	<br>
	<section id="news" class="news">
		<div class="container">
			<div class="row text-center">
				<div class="col-12">
					<h3 class="section-sub-title"><strong>LOGIN</strong></h3>
				</div>
			</div>

			<form id="contact-form" action="auth" method="post" role="form">
				<div class="container mt-5">
					<div class="mb-3 row">
						<label for="" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input class="form-control form-control-name" name="username" id="username" placeholder="" type="text" required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="" class="col-sm-2 col-form-label">Passwword</label>
						<div class="col-sm-10">
							<input class="form-control form-control-name" name="password" id="password" placeholder="" type="password" required>
						</div>
					</div>
					<div class="mb-3 row">
						<div class="col-sm-10 offset-2">
							<input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
						</div>
					</div>
				</div>
		</div>
		<div class="general-btn text-center mt-4">
			<button class="btn btn-primary" type="submit" value="login" name="login">LOG IN</button>

		</div>
		</form>
		</div>
		<!--/ Container end -->
	</section>
	<!--/ News end -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#show-password').click(function() {
				if ($(this).is(':checked')) {
					$('#password').attr('type', 'text');
				} else {
					$('#password').attr('type', 'password');
				}
			});
		});
	</script>
</body>

</html>