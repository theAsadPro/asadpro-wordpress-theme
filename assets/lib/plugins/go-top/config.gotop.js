document.addEventListener("DOMContentLoaded", function () {
    //Scroll to top
const goTop = document.getElementById("go-top");
// document.onscroll = scrollSmothDown;
if (goTop != null) {
  document.onscroll = scrollToTop;
  goTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}
function scrollToTop() {
  if (window.pageYOffset > 300) {
    goTop.classList.add("go-up");
    goTop.classList.remove("go-down");
  } else {
    goTop.classList.remove("go-up");
    goTop.classList.add("go-down");
  }
}
});