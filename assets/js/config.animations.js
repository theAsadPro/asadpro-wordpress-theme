document.addEventListener('DOMContentLoaded', function () {
    mouseShake("#testimonial-slider-wrapper", ".testimonial-slider-shape", true);
    //init AOS - Animation On Scroll by AOS.init();
    AOS.init();
    // mouseShake('#contact','.contact-section-shape', false);
    //create function for mouse shake effect for image on mouse move
    function mouseShake(element, shape, rotate) {
    let theElementID = document.querySelector(element);
    let theShape = document.querySelector(shape);
    function mousemove(e) {
        theShape.style.left = Math.floor(e.pageX / 150) + "%";
        theShape.style.top = Math.floor(e.pageY / 500) + "%";

        if (rotate === true) {
        theShape.style.transform = "rotate(" + Math.floor(e.pageY / 160) + "deg)";
        }
    }
    if (theElementID != null) {
        theElementID.addEventListener("mousemove", mousemove, false);
        theElementID.addEventListener("mouseout", function () {
        theShape.style.left = "0";
        theShape.style.top = "0";
        });
    }
    }
})