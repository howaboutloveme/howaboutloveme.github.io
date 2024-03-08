window.onscroll = function() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var bgElement = document.getElementById("background");

  if (bgElement) {
    bgElement.style.top = scrollTop + "px";
  }
};