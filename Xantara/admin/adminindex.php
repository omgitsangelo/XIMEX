<!DOCTYPE html>
<?php include '../php/database.php' ?>
<?php include '../php/FetchData/FetchSlide1.php' ?>
<?php include '../php/FetchData/FetchSlide2.php' ?>
<?php include '../php/FetchData/FetchSlide3Left.php' ?>
<?php include '../php/FetchData/FetchSlide3LeftLogo.php' ?>
<?php include '../php/FetchData/FetchSlide3Right.php' ?>
<?php include '../php/FetchData/FetchSlide3RightLogo.php' ?>
<?php include '../php/FetchData/FetchSlide4.php' ?>
<?php include '../php/FetchData/FetchSlide4Form.php' ?>
<?php include '../php/FetchData/FetchSlide1Logo.php' ?>
<html>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>

		<title>Xantara Development Corporation</title>

		<!-- Header Style CSS -->
	  <link href="../css/main.css?version=1.2" rel="stylesheet" type="text/css">
		<link href="../css/navbar.css?version=1.2" rel="stylesheet" type="text/css">
		<link href="../css/1stslide.css?version=3.5" rel="stylesheet" type="text/css">
		<link href="../css/2ndslide.css?version=3.5" rel="stylesheet" type="text/css">
		<link href="../css/3rdslide.css?version=2.4" rel="stylesheet" type="text/css">
		<link href="../css/4thslide.css?version=2.1" rel="stylesheet" type="text/css">
		<link href="../css/5thslide.css?version=2.1" rel="stylesheet" type="text/css">
		<link href="../css/footer.css?version=1.2" rel="stylesheet" type="text/css">
		<link href="../css/sidenav.css?version=5.1" rel="stylesheet" type="text/css">
		<link href="../css/edit.css?version=2.5	" rel="stylesheet" type="text/css">
		<link href="../css/modal-news.css?version=1.2	" rel="stylesheet" type="text/css">
		<link href="../css/php/1stslide.php?version=3.2	" rel="stylesheet" type="text/css">
		<link href="../css/php/2ndslide.php?version=3.1	" rel="stylesheet" type="text/css">
		<link href="../css/php/3rdslide.php?version=3.7	" rel="stylesheet" type="text/css">
		<link href="../css/php/4thslide.php?version=10" rel="stylesheet" type="text/css">
		<link href="../css/php/5thslide.php?version=4.5	" rel="stylesheet" type="text/css">
	</head>

	<body onLoad="showThis()">

			<!-- Start of Navigation bar -->

		<?php include '../navbar-admin.php'; ?>

			<!-- End of Navigation Bar -->

			<!-- Start of Side Navigation Bar -->

			<?php include 'sidenav/mainsidenav.php'; ?>


			<!-- End of Side Navigation Bar -->

			<!-- Start of Slideshows -->

		<div id="slideshow-container" class="row slideshow-container">
			<div class="slideshow-container">

				<!-- Slide 1: Home/About -->

			  <?php include '../slide1.php'; ?>

				<!-- End of Slide 1 -->

				<!-- Slide 2: Mission/Vision -->

				<?php include '../slide2.php'; ?>

				<!-- End of SLide 2 -->

				<!-- Slide 3: Explore -->

			  <?php include '../slide3.php'; ?>

				<!-- End of Slide 3 -->

				<!-- Slide 4: News & Events -->

				<?php include '../slide4.php'; ?>


				<!-- End of Slide 4 -->

				<!-- Slide 5: Contact Us -->

				<?php include '../slide5.php'; ?>

				<!-- End of Slide 5 -->

				<!-- Slider Controls -->

				<div class="prev-next">
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>

				<!-- End of Slider Controls -->

				<!-- Start of Footer -->

				<?php include '../footer.php'; ?>

				<!-- End of Footer -->

			</div>
		</div>

				<!-- End of Slideshows -->
				<script src="../js/jquery-3.1.1.min.js?version=1.1"></script>
				<script src="../js/slideshow.js?version=15.6"></script>
				<script src="../js/navbarjump.js?version=1.1"></script>
				<script src="../js/contactus.js?version=1.1"></script>
				<script src="../js/pushsidebar.js?version=1.1"></script>
				<script src="../js/edit.js?version=3.5"></script>
				<script src="../js/modal.js?version=1.1"></script>
	</body>


</html>
