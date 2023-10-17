<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<style>
		.contactus-css {
			padding: 10px;

		}

		.row-css {
			margin-bottom: 10px;
			padding-top: 1px;
			padding-bottom: 1px;
		}

		.main-css {
			background-color: black;
			color: white;
			padding: 5px;
		}

		.input-css,
		.input-css:focus {
			width: 100%;
			padding: 1em 1em;
			font-size: 16px;
			color: #fff;
			outline: none;
			background: rgba(241, 245, 249, 0.08);
			border: none;
			letter-spacing: 1px;
			border-radius: 0;
		}

		.btn-contact {
			color: #fff;
			font-size: 15px;
			font-weight: 600;
			text-transform: uppercase;
			outline: none;
			letter-spacing: 2px;
			padding: 1em 3em;
			border: none;
			cursor: pointer;
			transition: 0.5s all;
			background: #A30000;
			margin-top: 1.5em;
			border-radius: 0;
		}
	</style>
</head>

<body>
	<section class="main-css">

		<!--Section heading-->
		<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
		<!--Section description-->
		<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
			directly. Our team will come back to you within
			a matter of hours to help you.</p>

		<div class="row contactus-css">

			<!--Grid column-->
			<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="index.php" method="POST">

					<!--Grid row-->
					<div class="row row-css">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" placeholder="Your name"
									class="form-control input-css">
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" placeholder="Your email" name="email"
									class="form-control input-css">
							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row row-css">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" placeholder="Subject" name="subject"
									class="form-control input-css">
							</div>
						</div>
					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row row-css">

						<!--Grid column-->
						<div class="col-md-12">

							<div class="md-form">
								<textarea type="text" id="message" placeholder="Your message" name="message" rows="2"
									class="form-control md-textarea input-css"></textarea>
							</div>

						</div>
					</div>
					<!--Grid row-->
					<div class="text-center text-md-left">
						<button type="submit" class="btn btn-primary btn-contact" name="submitcontact">Send</button>
					</div>
				</form>

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
					<li><i style="color: #A30000" class="fa fa-map-marker mt-4 fa-2x"></i>
						<p>India</p>
					</li>

					<li><i style="color: #A30000" class="fa fa-envelope mt-4 fa-2x"></i>
						<p>shanikumargajera@gmail.com</p>
					</li>
				</ul>
			</div>
			<!--Grid column-->
			<p style="padding-top: 4%;" class="text-center w-responsive">Copyright © 2023 BlogForBlog</p>



		</div>

	</section>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>


</body>

</html>