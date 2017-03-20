<?php include '../../php/FetchData/FetchSlide4.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="sidenav contactussidenav">
  <form action="../../php/UploadData/Slide4/uploadslide4.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Contact Us</p></li>
        <label class="sidenav-buttons">Edit Header Color</label>
        <input class="inputs" name="sld4headcol" type="color" value="<?php echo "$slide4headercolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Header Size</label>
        <input class="inputs" name="sld4headsize" type="number" value="<?php echo "$slide4headersize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Header Content</label>
        <textarea class="inputs" name="sld4headcon"><?php echo "$slide4headercontent"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Button Color</label>
        <input class="inputs" name="sld4butcol" type="color" value="<?php echo "$slide4buttoncolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Button Text Color</label>
        <input class="inputs" name="sld4buttxtcol" type="color" value="<?php echo "$slide4buttontextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Button Text Size</label>
        <input class="inputs" name="sld4buttxtsize" type="number" value="<?php echo "$slide4buttontextsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Button Text Content</label>
        <textarea class="inputs" name="sld4buttxtcon"><?php echo "$slide4buttontextcontent"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide4Values">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
