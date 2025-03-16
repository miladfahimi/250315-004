document.addEventListener("DOMContentLoaded", function () {
  console.log("script.js is running!");

  const menuToggle = document.getElementById("menu-toggle");
  if (menuToggle) {
    menuToggle.addEventListener("click", function (event) {
      event.preventDefault();
      console.log("Menu toggle clicked!");
    });
  } else {
    console.error("menu-toggle element not found!");
  }
});
