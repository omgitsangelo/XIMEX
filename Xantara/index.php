<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Xantara Development Corporation</title>

	<!-- Header Style CSS -->
  <link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/navbar.css" rel="stylesheet" type="text/css">
	<link href="css/1stslide.css" rel="stylesheet" type="text/css">
	<link href="css/2ndslide.css" rel="stylesheet" type="text/css">
	<link href="css/3rdslide.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="showSlides(slideIndex)">

		<!-- Start of Navigation bar -->

	<div class="menu" id="header-container">
    <ul class="topnav" id="mytopnav">
      <li><a class="tablinks" onclick="currentSlide(1)">Home</a></li>
      <li><a class="tablinks" onclick="currentSlide(2)">Explore</a></li>
      <li><a class="tablinks" onclick="currentSlide(3)">Contact Us</a></li>
			<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a></li>
			<li><a class="login" href="login-index.html">Log In</a></li>
    </ul>
  </div>

		<!-- End of Navigation Bar -->

		<!-- Start of Slideshows -->

	<div id="slideshow-container" class="row slideshow-container">
		<div class="slideshow-container">

			<!-- Slide 1: Home/About -->

		  <div class="mySlides fade">
				<div class="row about" id="1">
					<div class="row intro">
            <div class="col-6 column">
            	<img src="images/XANTARA DEV -transparent.png" class="profile">
						</div>
            <div class="col-6 column">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
					</div>
					<div class="row copyright">
						<div class="col-4 left">
							<div class="row ">
								<div class="col-4"><a href="http://budgetbotika.com/"><img class="partners" src="images/budgetbotika_logo small.png"></a></div>
								<div class="col-4"><a href=""><img class="partners" src="images/UPEAST LOGO horizontal small.png"></a></div>
								<div class="col-4"><a href="http://www.xde247.com.ph/"><img class="partners" src="images/XDE LOGISTICS - orange  transparent small.png"></a></div>
							</div>
						</div>
						<div class="col-4 center">
								&copy;2017 - <strong>XANTARA DEVELOPMENT CORPORATION</strong>
						</div>
						<div class="col-4 right">
							<div class="row pad">
								<div class="col-4"><a><img class="partners" src="images/instagram.png"></a></div>
								<div class="col-4"><a><img class="partners" src="images/twitter.png"></a></div>
								<div class="col-4"><a><img class="partners" src="images/facebook.png"></a></div>
							</div>
						</div>
		  		</div>
				</div>
  		</div>

			<!-- End of Slide 1 -->

			<!-- Slide 2: Explore -->

		  <div class="mySlides fade">
				<div class="row selection">
					<div class="col-6 leftscreen" id="leftscreen">
						<div class="villagelogo2">
						</div>
					</div>
					<div class="col-6 rightscreen" id="rightscreen">
						<div class="villagelogo1">
							<img src="images/XDE VILLAGE LOGO VERTICAL lowres.png">
						</div>
					</div>
				</div>
				<div class="row copyright">
					<div class="col-4 left">
						<div class="row">
							<div class="col-4 logos"><a href="http://budgetbotika.com/"><img class="partners" src="images/budgetbotika_logo small.png"></a></div>
							<div class="col-4 logos"><a href=""><img class="partners" src="images/UPEAST LOGO horizontal small.png"></a></div>
							<div class="col-4 logos"><a href="http://www.xde247.com.ph/"><img class="partners" src="images/XDE LOGISTICS - orange  transparent small.png"></a></div>
						</div>
					</div>
					<div class="col-4 center">
							&copy;2017 - <strong>XANTARA DEVELOPMENT CORPORATION</strong>
					</div>
					<div class="col-4 right">
						<div class="row">
							<div class="col-4"><a><img class="partners" src="images/instagram.png"></a></div>
							<div class="col-4"><a><img class="partners" src="images/twitter.png"></a></div>
							<div class="col-4"><a><img class="partners" src="images/facebook.png"></a></div>
						</div>
					</div>
				</div>
		  </div>

			<!-- End of Slide 2 -->

			<!-- Slide 3: Contact Us -->

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
						<p class="hero_header" id="heroheader">GET IN TOUCH WITH US</p>
          	<div class="button" id="contactus">
							CONTACT US
						</div>
        	</div>
				</div>
				<div class="row copyright">
					<div class="col-4 left">
						<div class="row">
							<div class="col-4"><a href="http://budgetbotika.com/"><img class="partners" src="images/budgetbotika_logo small.png"></a></div>
							<div class="col-4"><a href=""><img class="partners" src="images/UPEAST LOGO horizontal small.png"></a></div>
							<div class="col-4"><a href="http://www.xde247.com.ph/"><img class="partners" src="images/XDE LOGISTICS - orange  transparent small.png"></a></div>
						</div>
					</div>
					<div class="col-4 center">
							&copy;2017 - <strong>XANTARA DEVELOPMENT CORPORATION</strong>
					</div>
					<div class="col-4 right">
						<div class="row pad">
							<div class="col-4"><a><img class="partners" src="images/instagram.png"></a></div>
							<div class="col-4"><a><img class="partners" src="images/twitter.png"></a></div>
							<div class="col-4"><a><img class="partners" src="images/facebook.png"></a></div>
						</div>
					</div>
				</div>
		  </div>

			<!-- End of Slide 2 -->

			<!-- Slider Controls -->

		<div class="prev-next">
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>

			<!-- End of Slider Controls -->

	</div>
</div>
			<!-- End of Slideshows -->
			<script src="js/jquery-3.1.1.min.js"></script>
			<script src="js/slideshow.js"></script>
			<script src="js/navbarjump.js"></script>
			<script src="js/contactus.js"></script>
</body>


</html>
