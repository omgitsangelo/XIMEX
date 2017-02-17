/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav()
{
  document.getElementById("sidenav").style.width = "20%";

  document.getElementById("slideshow-container").style.marginLeft = "20%";

  document.getElementById("slideshow-container").style.width = "80%";

  document.getElementById("topnav").style.width = "80%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav()
{
  document.getElementById("sidenav").style.width = "0";

  document.getElementById("slideshow-container").style.marginLeft = "0";

  document.getElementById("slideshow-container").style.width = "100%";

  document.getElementById("topnav").style.width = "100%";
}
