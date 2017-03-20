<!DOCTYPE html>
<?php include '../php/database.php' ?>
<?php include '../php/FetchData/FetchSlide1.php' ?>
<?php include '../php/FetchData/FetchSlide2.php' ?>
<?php include '../php/FetchData/FetchSlide3Left.php' ?>
<?php include '../php/FetchData/FetchSlide3LeftLogo.php' ?>
<?php include '../php/FetchData/FetchSlide3Right.php' ?>
<?php include '../php/FetchData/FetchSlide3RightLogo.php' ?>
<?php include '../php/FetchData/FetchSlide4.php' ?>
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
	<link href="../css/4thslide.css?version=2" rel="stylesheet" type="text/css">
	<link href="../css/footer.css?version=1.2" rel="stylesheet" type="text/css">
	<link href="../css/sidenav.css?version=5.1" rel="stylesheet" type="text/css">
	<link href="../css/edit.css?version=2.5	" rel="stylesheet" type="text/css">
	<link href="../css/php/1stslide.php?version=3.2	" rel="stylesheet" type="text/css">
	<link href="../css/php/2ndslide.php?version=3.1	" rel="stylesheet" type="text/css">
	<link href="../css/php/3rdslide.php?version=3.7	" rel="stylesheet" type="text/css">
	<link href="../css/php/4thslide.php?version=4.5	" rel="stylesheet" type="text/css">
</head>

<body onLoad="showSlides(slideIndex)">

		<!-- Start of Navigation bar -->

	<div class="menu" id="header-container">
    <ul class="topnav" id="mytopnav">
      <li><a class="tablinks" onclick="currentSlide(1)">Home</a></li>
			<li><a class="tablinks" onclick="currentSlide(2)">Mission and Vision</a></li>
      <li><a class="tablinks" onclick="currentSlide(3)">Explore</a></li>
      <li><a class="tablinks" onclick="currentSlide(4)">Contact Us</a></li>
			<li><a class="tablinks" onclick="currentSlide(5)">News & Updates</a></li>
			<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a></li>
			<li><a class="logout" href="../login-index.php">Log Out</a></li>
			<li><a class="edit" id="edit">Edit</a></li>
    </ul>
  </div>

		<!-- End of Navigation Bar -->

		<!-- Start of Side Navigation Bar -->

		<?php include 'sidenav/mainsidenav.php'; ?>


		<!-- End of Side Navigation Bar -->

		<!-- Start of Slideshows -->

	<div id="slideshow-container" class="row slideshow-container">
		<div class="slideshow-container">

			<!-- Slide 1: Home/About -->

		  <div class="mySlides fade">
				<div class="row about" id="1">
					<div class="row intro">
            <div class="col-8">
							<div class="profile-container">
	            	<img src="../<?php echo $slide1logopath ?>" class="profile" />
							</div>
						</div>
            <div class="col-4 column">
							<p><?php echo "$slide1textcontent1" ?></p>
							<p><?php echo "$slide1textcontent2" ?></p>
							<p><?php echo "$slide1textcontent3" ?></p>
							<p><?php echo "$slide1textcontent4" ?></p>
						</div>
					</div>
				</div>
  		</div>

			<!-- End of Slide 1 -->

			<!-- Slide 2: Mission/Vision -->

			<div class="mySlides fade">
			  <div class="row misvis-container">
					<div class="row">
						<div class="col-12 mission-container">
					    <div class="mission">
					      <h1>Mission</h1>
								<div class="textbox">
						      <p><?php echo "$slide2missiontextcontent" ?></p>
								</div>
					    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 vision-container">
					    <div class="vision">
					      <h1>Vision</h1>
								<div class="textbox">
					      	<p><?php echo "$slide2visiontextcontent" ?></p>
								</div>
					    </div>
						</div>
				  </div>
				</div>
			</div>

			<!-- End of SLide 2 -->

			<!-- Slide 3: Explore -->

		  <div class="mySlides fade">
				<div class="row selection">
					<div class="col-6 leftscreen" id="leftscreen">
						<div class="inforight">
							<p><?php echo "$slide3righttext1content" ?></p>
							<p><?php echo "$slide3righttext2content" ?></p>
							<p><?php echo "$slide3righttext3content" ?></p>
							<p><?php echo "$slide3righttext4content" ?></p>
						</div>
						<div class="otherbrandlogo">
							<img src="../<?php echo $slide3rightlogopath ?>" />
						</div>
					</div>
					<div class="col-6 rightscreen" id="rightscreen">
						<div class="xdelogo">
							<img src="../<?php echo "$slide3leftlogopath" ?>" />
						</div>
						<div class="infoleft">
							<p><?php echo "$slide3lefttext1content" ?></p>
							<p><?php echo "$slide3lefttext2content" ?></p>
							<p><?php echo "$slide3lefttext3content" ?></p>
							<p><?php echo "$slide3lefttext4content" ?></p>
						</div>
					</div>
				</div>
		  </div>

			<!-- End of Slide 3 -->

			<!-- Slide 4: Contact Us -->

		  <div class="mySlides fade">
        <div class="row container" id="contact">
					<div class="col-4 forms" id="forms">
						<form>
							<h2>Let us know what you think.</h2>
							<br>
							<label>
								<p>First Name</p>
								<input type="text" name="fname" required>
							</label>
							<label>
								<p>Last Name</p>
								<input type="text" name="lname" required>
							</label>
							<label>
								<p>Email</p>
								<input type="email" name="email" required>
							</label>
							<label>
								<p>Message</p>
								<textarea rows="10" cols="40" required></textarea>
							</label>
							<br>
							<input type="submit">
						</form>
					</div>
					<div class="col-8 contact">
						<p class="hero_header" id="heroheader"><?php echo $slide4headercontent ?></p>
          	<div class="button" id="contactus" onclick="openNav()">
							<?php echo "$slide4buttontextcontent" ?>
						</div>
        	</div>
				</div>
		  </div>

			<!-- End of Slide 4 -->

			<!-- Slider Controls -->

		<div class="prev-next">
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>

			<!-- End of Slider Controls -->

			<!-- Start of Footer -->

			<div class="row copyright">
				<div class="col-4 left">
					<div class="row left-container">
						<div class ="row">
							<div class="col-12"><a href=""><img class="parent" src="../images/XIMEX LOGO - orange transparent.png"></a></div>
						</div>
						<div class ="row">
							<div class="col-4"><a href="http://budgetbotika.com/"><img class="partners" src="../images/budgetbotika_logo small35.png"></a></div>
							<div class="col-4"><a href=""><img class="partners" src="../images/UPEAST LOGO WHITE 35.png"></a></div>
							<div class="col-4"><a href="http://www.xde247.com.ph/"><img class="partners" src="../images/XDE LOGISTICS - orange  transparent small35.png"></a></div>
						</div>
					</div>
				</div>
				<div class="col-4 center">
						<strong>&copy;2017 - XANTARA DEVELOPMENT CORPORATION</strong>
				</div>
				<div class="col-4 right">
					<div class="row">
						<div class="col-4"><a><img class="partners" src="../images/instagram.png"></a></div>
						<div class="col-4"><a><img class="partners" src="../images/twitter.png"></a></div>
						<div class="col-4"><a><img class="partners" src="../images/facebook.png"></a></div>
					</div>
				</div>
			</div>

			<!-- End of Footer -->

	</div>
</div>

			<!-- End of Slideshows -->
			<script src="../js/jquery-3.1.1.min.js?version=1.1"></script>
			<script src="../js/slideshow.js?version=1.1"></script>
			<script src="../js/navbarjump.js?version=1.1"></script>
			<script src="../js/contactus.js?version=1.1"></script>
			<script src="../js/pushsidebar.js?version=1.1"></script>
			<script src="../js/edit.js?version=3.5"></script>
</body>


</html>
