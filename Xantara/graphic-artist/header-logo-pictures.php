<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Xantara Development Corporation</title>
	<link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/graphic-artist-panel.css?version=10" />

  <link rel="stylesheet" type="text/css" href="css/graphics-artist-uploads.css?version=20" />

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

    <?php include 'graphic-artist-sidenav.php'; ?>

		<div class="row">
      <div class="col-12 col-m-12">
				<form action="artist-upload-header-logo.php" method="post" enctype="multipart/form-data">
					<input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
					<input type="submit" value="Upload Image" name="submit">
				</form>
      </div>
    </div>

    <?php include 'php/display-header-logo-photos.php'; ?>

  </div>
</body>

</html>
