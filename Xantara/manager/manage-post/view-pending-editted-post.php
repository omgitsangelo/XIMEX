<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Xantara Development Corporation</title>
	<link rel="icon"  type="image/png" href="../../../images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-panel.css?version=1.0" />
  <!-- News and Events Style CSS -->
  <link href="../../css/4thslide.css?version=2.1" rel="stylesheet" type="text/css">

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

		<?php include '../manager-sidenav.php'; ?>

    <!-- Latest Updates -->
    <div id="news-events" class="row news-events" >
  		<div id="heading-news-events" class="col-12 col-m-12 heading-news-events">
  			<h1>LATEST UPDATES</h1>
  		</div>
  		<div class="row news-events-body">
  			<?php include '../php/display-editted-updates.php'; ?>
  		</div>
  	</div>
  	<!-- End of Latest Updates -->
  </div>
</body>

</html>
