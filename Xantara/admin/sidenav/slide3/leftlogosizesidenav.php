<?php

?>
<!-- Start of Logo Sidenav -->
<div id="LogoSizeSidenav" class="sidenav logosizesidenav">
  <form action="../../php/UploadData/Slide3/uploadslide3leftLogosize.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Logo Image</p></li>
      <li>
        <label class="sidenav-buttons">
            <input class="inputs" type="number" name="sld1logsize" value="<?php echo "$slide3leftlogosize" ?>">
             <p>Edit Logo Size</p>
        </label>
      </li>
      <br />
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submitSlide3LeftLogoSize">
             <p>Save and Publish</p>
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<?php include '../../php/FetchData/FetchSlide3LeftLogo.php'; ?>
<!-- End of Logo Sidenav -->
