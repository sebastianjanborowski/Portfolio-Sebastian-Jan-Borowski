window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var scrollToTopBtn = document.getElementById("scrollToTopBtn");
  if ((document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) && window.innerWidth > 168) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

function scrollToTop() {
  var position = document.documentElement.scrollTop || document.body.scrollTop;
  if (position > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, position - position / 8);
  }
}
