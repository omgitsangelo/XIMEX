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
	<!-- Form Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-form.css?version=10" />

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

		<?php include '../manager-sidenav.php'; ?>

		<form id="post-form" action="../php/add-post-manager.php" method="post">
			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Title Post</label>
					<input type="text" name="post-title" required>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Content Post</label>
					<br>
					<textarea class="textarea-style" rows="10" cols="110" name="post_content" required></textarea>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<input class="save-publish" type="submit" name="submit-post" value="Add Post">
				</div>
			</div>
		</form>
  </div>
</body>

</html>
