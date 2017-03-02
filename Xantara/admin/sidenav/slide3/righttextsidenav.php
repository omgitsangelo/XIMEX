<?php include '../../php/FetchData/FetchSlide3.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="textsidenav">
  <form action="../../php/UploadData/Slide3/uploadslide3rightText.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <li>
        <label class="sidenav-buttons">Edit Text Color</label>
        <input class="inputs" name="sld1txtcol" type="color" value="<?php echo "$slide1textcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Size</label>
        <input class="inputs" name="sld1txtsize" type="number" value="<?php echo "$slide1textsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 1 Content</label>
        <textarea class="inputs" name="sld1txt1"><?php echo "$slide1textcontent1"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 2 Content</label>
        <textarea class="inputs" name="sld1txt2"><?php echo "$slide1textcontent2"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 3 Content</label>
        <textarea class="inputs" name="sld1txt3"><?php echo "$slide1textcontent3"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 4 Content</label>
        <textarea class="inputs" name="sld1txt4"><?php echo "$slide1textcontent4"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide3Values">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
