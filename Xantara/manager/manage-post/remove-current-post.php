<?php include '../php/fetch-latest-update-values.php'; ?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Xantara Development Corporation</title>
	<link rel="icon"  type="image/png" href="../../images/UPEAST/UPEAST LOGO vertical copy2.png" />
	<!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-panel.css?version=1.0" />
	<!-- Form Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-form.css?version=10" />
  <!-- News and Events Style CSS -->
  <link href="../../css/4thslide.css?version=2.1" rel="stylesheet" type="text/css">

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

		<?php include '../manager-sidenav.php'; ?>

    <form id="post-form" action="../php/remove-current-post.php" method="post">
      <input type="number" value="<?php echo $updates_id ?>" name="ref_no" style="display: none;">
			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Title Post</label>
					<input type="text" name="post-edit-title" value="<?php echo $title ?>" readonly>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Content Post</label>
					<br>
					<textarea class="textarea-style" rows="10" cols="110" name="post-edit-content" readonly><?php echo $content ?></textarea>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<input class="save-publish" type="submit" name="submit-remove-post" value="Remove Post" readonly/>
				</div>
			</div>
		</form>
  </div>
</body>

</html>
