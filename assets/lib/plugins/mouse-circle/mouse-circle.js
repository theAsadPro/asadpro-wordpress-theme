document.addEventListener('DOMContentLoaded', function () {
    //Mouse Follw
    const mouseWrap = document.querySelector("#mouse-follow");
    if (mouseWrap != null) {
        document.onmousemove = function (e) {
            mouseWrap.classList.add("start-move");
            setTimeout(function () {
            mouseWrap.classList.remove("start-move");
            }, 500);

            if (e.pageX > window.innerWidth - 60) {
            mouseWrap.style.left = e.pageX - 40 + "px";
            mouseWrap.style.top = e.pageY - 0 + "px";
            } else {
            mouseWrap.style.left = e.pageX + "px";
            mouseWrap.style.top = e.pageY + "px";
            }
        };
    }
});