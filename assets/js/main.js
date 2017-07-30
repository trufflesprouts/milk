'use strict';
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function hamburgerFunction() {
  var menu = document.getElementById("nav-menu");
  menu.classList.toggle('nav-active');
  var hamburger = document.getElementById("hamburger-icon");
  hamburger.classList.toggle('nav-active');
}
