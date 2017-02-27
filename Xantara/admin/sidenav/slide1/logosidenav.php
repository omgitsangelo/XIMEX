<?php

?>
<!-- Start of Logo Sidenav -->
<div id="LogoSidenav" class="logosidenav">
  <form action="../../php/uploadslide1Logo.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Logo Image</p></li>
      <li>
        <label class="sidenav-buttons">
            <input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
             <p>Choose Logo</p>
        </label>
      </li>
      <br />
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submitSlide1Logo">
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
