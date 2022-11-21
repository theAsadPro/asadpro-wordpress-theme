document.addEventListener('DOMContentLoaded', function () {
    const contactform = document.getElementById("#contactform");
    if (contactform != null) {
        contactform.addEventListener("click", function (e) {
            e.preventDefault();
        });
    }
});