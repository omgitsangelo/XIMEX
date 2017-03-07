<?php ?>
<div class="mySlides fade">
  <div class="row container" id="contact">
    <div class="col-4 forms" id="forms">
      <form>
        <h2>Let us know what you think.</h2>
        <br>
        <label>
          <p>First Name</p>
          <input type="text" name="fname" required>
        </label>
        <label>
          <p>Last Name</p>
          <input type="text" name="lname" required>
        </label>
        <label>
          <p>Email</p>
          <input type="email" name="email" required>
        </label>
        <label>
          <p>Message</p>
          <textarea rows="10" cols="40" required></textarea>
        </label>
        <br>
        <input type="submit">
      </form>
    </div>
    <div class="col-8 contact">
      <p class="hero_header" id="heroheader">GET IN TOUCH WITH US</p>
      <div class="button" id="contactus" onclick="openNav()">
        CONTACT US
      </div>
    </div>
  </div>
</div>
