<?php include '../../php/FetchData/FetchSlide3.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="textsidenav">
  <form action="../../php/UploadData/Slide3/uploadslide3leftText.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <li>
        <label class="sidenav-buttons">Edit Text Background Color</label>
        <input class="inputs" name="sld3lefttxtbgcol" type="color" value="<?php echo "$slide3lefttextbgcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Color</label>
        <input class="inputs" name="sld3lefttxtcol" type="color" value="<?php echo "$slide3lefttextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Size</label>
        <input class="inputs" name="sld3lefttxtsize" type="number" value="<?php echo "$slide3lefttextsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 1 Content</label>
        <textarea class="inputs" name="sld3lefttxtboxcon1"><?php echo "$slide3lefttext1content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 2 Content</label>
        <textarea class="inputs" name="sld3lefttxtboxcon2"><?php echo "$slide3lefttext2content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 3 Content</label>
        <textarea class="inputs" name="sld3lefttxtboxcon3"><?php echo "$slide3lefttext3content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 4 Content</label>
        <textarea class="inputs" name="sld3lefttxtboxcon4"><?php echo "$slide3lefttext4content"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide3LeftValues">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
