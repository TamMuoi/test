document.addEventListener("DOMContentLoaded", function() {
  var screenWidth = document.getElementsByClassName("container-header");
  var paddingImg = document.getElementsByClassName("logo");
  // console.log(paddingImg[0]);
  var navBg = document.getElementsByClassName("nav-bg");
  var windowWidth = window.innerWidth;
  if (windowWidth <= 991) {
  	screenWidth[0].classList.remove("container");
  	screenWidth[0].classList.add("container-fluid");
  	navBg[0].style.padding = "0.5rem 0";
  	paddingImg[0].style.paddingLeft = "15px";
  } else {
  	screenWidth[0].classList.remove("container-fluid");
  	screenWidth[0].classList.add("container");
  	navBg[0].style.padding = "0.5rem 1rem";
  	paddingImg[0].style.paddingLeft = "0";
  }
});
