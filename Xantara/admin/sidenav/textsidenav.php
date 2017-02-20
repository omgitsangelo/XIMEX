<?php
//  include '../php/Header Php/fetch-header-values.php';
?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="textsidenav">
  <form action="../php/Header Php/update-header-values.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <li>
        <label class="sidenav-buttons">Edit Text Color</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Text Size</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 1 Content</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 2 Content</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 3 Content</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Textbox 4 Content</label>
        <input class="inputs" type="text" value="<?php echo "hello world!" ?>">
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
<!-- End of Text Sidenav -->
