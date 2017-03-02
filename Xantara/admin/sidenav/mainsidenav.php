<?php

?>
<!-- Start of Sidenav -->
<div class="sidenav mainsidenav">
  <p href="javascript:void(0)" class="closebtn">&times;</p>
  <ul class="ul-list">
    <li><h1 class="sidenavhead">Menu</h1></li>
    <p> </p>
    <li>
      <label class="editslide1">
        <a>EDIT SLIDE 1</a>
      </label>
      <ul class="ul-list slide1submenu">
        <li>
          <label class="logosidenavbutton">
            <a>Edit Logo Image</a>
          </label>
          <?php include 'slide1/logosidenav.php'; ?>
        </li>
        <li>
          <label class="logosizesidenavbutton">
            <a>Edit Logo Size</a>
          </label>
          <?php include 'slide1/logosizesidenav.php'; ?>
        </li>
        <li>
          <label class="bgsidenavbutton">
            <a>Edit Background</a>
          </label>
          <?php include 'slide1/bgsidenav.php'; ?>
        </li>
        <li>
          <label class="textsidenavbutton">
            <a>Edit Text</a>
          </label>
          <?php include 'slide1/textsidenav.php'; ?>
        </li>
      </ul>
    </li>
    <li>
      <label class="editslide2">
        <a>EDIT SLIDE 2</a>
      </label>
      <ul class="ul-list slide2submenu">
        <li>
          <label class="slide2bg">
            <a>Edit Background</a>
          </label>
          <?php include 'slide2/bgsidenav.php'; ?>
        </li>
        <li>
          <label class="slide2text">
            <a>Edit Text</a>
          </label>
          <?php include 'slide2/textsidenav.php'; ?>
        </li>
      </ul>
    </li>
    <li>
      <label class="editslide3">
        <a>EDIT SLIDE 3</a>
      </label>
      <ul class="ul-list slide3submenu">
        <li>
          <label class="">
            <a>Edit Left Screen</a>
          </label>
        </li>
        <li>
          <label class="">
            <a>Edit Right Screen</a>
          </label>
        </li>
      </ul>
    </li>
    <li>
      <label class="editslide4">
        <a>EDIT SLIDE 4</a>
      </label>
      <ul class="ul-list slide4submenu">
        <li>
          <label class="">
            <a>Edit Contact Us</a>
          </label>
        </li>
        <li>
          <label class="">
            <a>Edit Forms</a>
          </label>
        </li>
      </ul>
    </li>
  </ul>
</div>
<!-- End of Sidenav -->
