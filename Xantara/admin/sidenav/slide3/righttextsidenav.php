<?php include '../../php/FetchData/FetchSlide3Right.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="sidenav textsidenav3right">
  <form action="../../php/UploadData/Slide3/uploadslide3rightText.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <!-- <li>
        <label class="sidenav-buttons">Edit Text Background Color</label>
        <input class="inputs" name="sld3righttxtbgcol" type="color" value="<?php echo "$slide3rightbgcolor" ?>">
      </li>
      <br />
      <li> -->
        <label class="sidenav-buttons">Edit Text Color</label>
        <input class="inputs" name="sld3righttxtcol" type="color" value="<?php echo "$slide3righttextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Size</label>
        <input class="inputs" name="sld3righttxtsize" type="number" value="<?php echo "$slide3righttextsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 1 Content</label>
        <textarea class="inputs" name="sld3righttxtboxcon1"><?php echo "$slide3righttext1content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 2 Content</label>
        <textarea class="inputs" name="sld3righttxtboxcon2"><?php echo "$slide3righttext2content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 3 Content</label>
        <textarea class="inputs" name="sld3righttxtboxcon3"><?php echo "$slide3righttext3content"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 4 Content</label>
        <textarea class="inputs" name="sld3righttxtboxcon4"><?php echo "$slide3righttext4content"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide3RightValues">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
