document.addEventListener('DOMContentLoaded', function () {
    // with vanilla JS
    // init Isotope
    const portfolioEl = document.querySelector(".portfolio");
    if (portfolioEl != null) {
        const iso = new Isotope(".portfolio", {
            itemSelector: ".portfolio-item",
            layoutMode: "fitRows",
        });
        // bind filter button click
        let filtersElem = document.querySelector(".isotope-filter-butons");
        if (filtersElem != null) {
            filtersElem.addEventListener("click", function (event) {
                event.preventDefault();
                // only work with buttons
                if (!matchesSelector(event.target, "a")) {
                    return;
                }
                let filterValue = event.target.getAttribute("data-filter");
                let element = document.querySelector(
                    '[data-filter="' + filterValue + '"]'
                );
                let buttons = document.querySelectorAll("[data-filter]");
                for (let i = 0; i < buttons.length; i++) {
                    let currentElement = buttons[i].getAttribute("data-filter");
                    if (currentElement != filterValue) {
                        buttons[i].parentElement.classList.remove("active");
                    }
                }
                element.parentElement.classList.add("active");
                // use matching filter function
                iso.arrange({ filter: filterValue });
            });
        }
    }
});