document.addEventListener('DOMContentLoaded', function () {
//cookiesPopup
const cookiesPopup = document.querySelector("#cookiesPopup");
const cookiesPopupClose = document.querySelector("#cookiesPopup .close");
const acceptcookies = document.querySelector("#cookiesPopup #acceptcookies");
if (cookiesPopup != null) {
  document.onscroll = function () {
    setTimeout(() => {
      cookiesPopup.style.display = "block";
      cookiesPopup.style.left = "20px";
    }, 1000);
  };
  cookiesPopupClose.addEventListener("click", function () {
    cookiesPopup.style.left = "-600px";
    setTimeout(() => {
      cookiesPopup.remove();
    }, 1000);
  });
  acceptcookies.addEventListener("click", function () {
    cookiesPopup.style.left = "-600px";
    setTimeout(() => {
      cookiesPopup.remove();
    }, 1000);
  });
} 
});