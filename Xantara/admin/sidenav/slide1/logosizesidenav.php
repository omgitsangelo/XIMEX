<?php

?>
<!-- Start of Logo Sidenav -->
<div id="LogoSizeSidenav" class="sidenav logosizesidenav">
  <form action="../../php/uploadslide1Logosize.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Logo Image</p></li>
      <li>
        <label class="sidenav-buttons">
            <input class="inputs" type="number" name="logosize" value="<?php echo "$slide1logosize" ?>">
             <p>Edit Logo Size</p>
        </label>
      </li>
      <br />
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submitSlide1LogoSize">
             <p>Save and Publish</p>
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<?php include '../../php/FetchSlide1/FetchSlide1Logo.php'; ?>
<?php include '../../php/FetchSlide1/FetchSlide1.php'; ?>
<!-- End of Logo Sidenav -->
