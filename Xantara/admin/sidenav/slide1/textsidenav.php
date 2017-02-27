<?php
//  include '../php/Header Php/fetch-header-values.php';
?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="textsidenav">
  <form action="../../php/uploadslide1text.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <li>
        <label class="sidenav-buttons">Edit Text Color</label>
        <input class="inputs" name="textcolor" type="color" value="<?php echo "$slide1textcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Size</label>
        <input class="inputs" name="textsize" type="number" value="<?php echo "$slide1textsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 1 Content</label>
        <textarea class="inputs" name="text1"><?php echo "$slide1textcontent1"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 2 Content</label>
        <textarea class="inputs" name="text2"><?php echo "$slide1textcontent2"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 3 Content</label>
        <textarea class="inputs" name="text3"><?php echo "$slide1textcontent3"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 4 Content</label>
        <textarea class="inputs" name="text4"><?php echo "$slide1textcontent4"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitHeaderCaption">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<?php include '../../php/FetchSlide1/FetchSlide1.php'; ?>
<!-- End of Text Sidenav -->
