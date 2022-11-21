document.addEventListener('DOMContentLoaded', function () {
    // Can also be included with a regular script tag
    const typedEL = document.getElementById("typed");
    if (typedEL != null) {
    var typed = new Typed("#typed", {
        strings: [" " + heroTyped.one, heroTyped.two, heroTyped.three, heroTyped.four],
        loop: true,
        typeSpeed: 50,
        backSpeed: 40,
        smartBackspace: false,
    });
    }
})