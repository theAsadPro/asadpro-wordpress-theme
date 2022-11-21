//Enable Bootstrap Tool Tip
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
console.log("Log --> tooltipTriggerList", tooltipTriggerList);

const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// Smoth Scrollbar
// var Scrollbar = window.Scrollbar;

// Scrollbar.init(document.querySelector("#my-scrollbar"), options);
