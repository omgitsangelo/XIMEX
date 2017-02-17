<?php

?>
<!-- Start of Logo Sidenav -->
<div id="LogoSidenav" class="logosidenav">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="color: white">Logo Image</p></li>
      <li>
        <label class="sidenav-buttons">
            <input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
             Choose Logo
        </label>
      </li>
      <li>
        <label class="sidenav-buttons">
            <input class="inputs" type="text" value="<?php echo "hello world!"?>">
             Edit Logo Size
        </label>
      </li>
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submit">
             Save and Publish
        </label>
      </li>
    </ul>
  </form>
</div>
<!-- End of Logo Sidenav -->
