<?php include '../../php/FetchSlide2/FetchSlide2.php'; ?>
<!-- Start of Text Sidenav -->
<div id="TextSidenav" class="textsidenav2 sidenav">
  <form action="../../php/uploadslide2Text.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="font-size: 16px; padding-top: 10px; padding-bottom: 10px;">Header</p></li>
      <li>
        <label class="sidenav-buttons">Edit Mission Header Color</label>
        <input class="inputs" name="sld2misheadcol" type="color" value="<?php echo "$slide2missionheadercolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Mission Header Size</label>
        <input class="inputs" name="sld2misheadsize" type="number" value="<?php echo "$slide2missionheadersize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Mission Textbox Color</label>
        <input class="inputs" name="sld2mistxtboxcol" type="color" value="<?php echo "$slide2missiontextboxcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Mission Text Color</label>
        <input class="inputs" name="sld2mistxtcol" type="color" value="<?php echo "$slide2missiontextboxcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Mission Text Content</label>
        <textarea class="inputs" name="sld2mistxtcon"><?php echo "$slide2missiontextcontent"?></textarea>
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Vision Header Color</label>
        <input class="inputs" name="sld2visheadcol" type="color" value="<?php echo "$slide2visionheadercolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Vision Header Size</label>
        <input class="inputs" name="sld2visheadsize" type="number" value="<?php echo "$slide2visionheadersize" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Vision Textbox Color</label>
        <input class="inputs" name="sld2vistxtboxcol" type="color" value="<?php echo "$slide2visiontextboxcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Vision Text Color</label>
        <input class="inputs" name="sld2vistxtcol" type="color" value="<?php echo "$slide2visiontextcolor" ?>">
      </li>
      <br />
      <li>
        <label class="sidenav-buttons">Edit Vision Text Content</label>
        <textarea class="inputs" name="sld2vistxtcon"><?php echo "$slide2visiontextcontent"?></textarea>
      </li>
      <br />
        <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitSlide2Values">
          Save and Publish
        </label>
      </li>
      <br />
    </ul>
  </form>
</div>
<!-- End of Text Sidenav -->
