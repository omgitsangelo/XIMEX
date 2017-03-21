<?php include '../../php/FetchData/FetchSlide4Form.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="sidenav formsidenav">
  <form action="../../php/UploadData/Slide4/uploadslide4Form.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Form</p></li>
      <li>
        <label class="sidenav-buttons">Edit Form Color</label>
        <input class="inputs" name="sld4formcol" type="color" value="<?php echo "$slide4buttontextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Text Size</label>
        <input class="inputs" name="sld4formtxtsize" type="number" value="<?php echo "$slide4formtextsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Text Color</label>
        <input class="inputs" name="sld4formtxtcol" type="color" value="<?php echo "$slide4formtextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Header Size</label>
        <input class="inputs" name="sld4formhdrsize" type="number" value="<?php echo "$slide4formheadersize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Header Color</label>
        <input class="inputs" name="sld4formhdrcol" type="color" value="<?php echo "$slide4formheadercolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Header Content</label>
        <textarea class="inputs" name="sld4formhdrcon"><?php echo "$slide4formheadercontent"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Button Color</label>
        <input class="inputs" name="sld4formbutcol" type="color" value="<?php echo "$slide4formbuttoncolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Button Text Color</label>
        <input class="inputs" name="sld4formbuttxtcol" type="color" value="<?php echo "$slide4formbuttontextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Button Text Size</label>
        <input class="inputs" name="sld4formbuttxtsize" type="number" value="<?php echo "$slide4formbuttontextsize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Form Button Text Content</label>
        <textarea class="inputs" name="sld4formbuttxtcon"><?php echo "$slide4formbuttontextcontent"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide4FormValues">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
