<html>
<head>
	<title>ide2</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

     <title>ide2</title>

	<!-- tab img -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/ide2.png">
    
	<!-- css plugin ----------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/aos.css">

	<!-- main css ------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-responsives.css">

	<!-- google fonts ---------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>	
<!-- // CONTACT BEGIN ------------------------------------------------------------------------------------------------------------------------------------------------>
<section id="contact">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Contact Us</h2>
				</div>

				<div class="address-icons col-md-8 col-md-offset-2">
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-envelope fa-2x"></i>
						<p>info@cmrit.ac.in</p>
					</div>

					<div class="col-md-4 col-sm-4">
						<i class="fa fa-map-marker fa-2x"></i>
						<p>Bengaluru,
							<br> Pin-560017
						</p>
					</div>

					<div class="col-md-4 col-sm-4">
						<i class="fa fa-phone fa-2x"></i>
						<p>+91 636------14</p>
					</div>
					<div class="clearfix"></div>
				</div>

				
<!-- -- ----------------------------------formspree !------------------------------------------------------------------------------------------------------------------------------------------------>
				<div class="col-md-8 col-md-offset-2">
					<form id="contact-form" name="contact" method="POST" action="https://formspree.io/nitk17ec@cmrit.ac.in">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
									<p class="help-block text-danger"></p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="message" id="message" class="form-control" rows="4" placeholder="Anything you wish to say ..." required></textarea>
							<p class="help-block text-danger"></p>
						</div>

						<div class="col-md-12 col-xs-12">
							<button id="submit" type="submit" name="submit" class="btn btn-dark">Send Us your Queries.</button>
						</div>

						<div id="success" class="col-md-12 col-xs-12">
							<p class="green textcenter">Your message was send, Thank you.</p>
						</div>

						<div id="error" class="col-md-12 col-xs-12">
							<p>Something maybe wrong please try again</p>
						</div>
					</form>
				</div>
			</div>
		</div>
    </section>
</body>
</html>
