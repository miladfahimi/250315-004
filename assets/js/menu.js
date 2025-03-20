document.addEventListener("DOMContentLoaded", function () {
  // ─────────────────────────────────────────────
  // Nav Right Menu
  // ─────────────────────────────────────────────
  const menuToggle = document.getElementById("menu-toggle");
  const mainMenu = document.getElementById("main-menu");
  const subMenus = document.querySelectorAll(".nav-right .submenu");
  const submenuToggles = document.querySelectorAll(
    ".nav-right .submenu-toggle"
  );
  const backButtons = document.querySelectorAll(".nav-right .back-to-main");

  if (menuToggle) {
    menuToggle.addEventListener("click", function (event) {
      event.preventDefault();
      mainMenu.style.display = "block";
      subMenus.forEach((menu) => (menu.style.display = "none"));
    });
  }

  submenuToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (event) {
      event.preventDefault();
      const targetSubMenu = document.getElementById(toggle.dataset.submenu);
      if (targetSubMenu) {
        mainMenu.style.display = "none";
        subMenus.forEach((menu) => (menu.style.display = "none"));
        targetSubMenu.style.display = "block";
      }
    });
  });

  backButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();
      button.style.pointerEvents = "auto";
      subMenus.forEach((menu) => (menu.style.display = "none"));
      mainMenu.style.display = "block";
    });
  });

  document.addEventListener("click", function (event) {
    if (
      menuToggle &&
      !menuToggle.closest(".nav-right .dropdown").contains(event.target)
    ) {
      mainMenu.style.display = "none";
      subMenus.forEach((menu) => (menu.style.display = "none"));
    }
  });

  // ─────────────────────────────────────────────
  // Nav Left Menu
  // ─────────────────────────────────────────────
  document.querySelectorAll(".nav-left .submenu-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (event) {
      event.preventDefault();
      let submenu = this.nextElementSibling;
      if (submenu && submenu.classList.contains("nav-left-dropdown-menu")) {
        submenu.style.display =
          submenu.style.display === "block" ? "none" : "block";
      }
    });
  });

  // ─────────────────────────────────────────────
  // Account Dropdown
  // ─────────────────────────────────────────────
  const accountToggles = document.querySelectorAll(".nav-account-toggle");
  const accountMenus = document.querySelectorAll(".nav-account-menu");

  accountToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (event) {
      event.preventDefault();
      let dropdown = this.nextElementSibling;
      if (dropdown) {
        dropdown.classList.toggle("active");
      }
    });
  });

  document.addEventListener("click", function (event) {
    accountMenus.forEach((menu) => {
      if (
        !menu.contains(event.target) &&
        !event.target.closest(".nav-account-toggle")
      ) {
        menu.classList.remove("active");
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const searchBox = document.querySelector(".search-box");
  const navbar = document.querySelector(".navbar");
  let lastScrollTop = 0;

  function handleScroll() {
    let currentScroll =
      window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
      // Scrolling Down: Hide search bar & reduce navbar height significantly
      if (window.innerWidth <= 1024) {
        searchBox.style.opacity = "0";
        searchBox.style.transform = "translateY(-100%)";
        searchBox.style.pointerEvents = "none";
        navbar.style.padding = "5px 15px"; // Reduce padding more
        navbar.style.height = "90px"; // Force navbar height to shrink
      }
    } else {
      // Scrolling Up: Show search bar & restore navbar height
      if (window.innerWidth <= 1024) {
        searchBox.style.opacity = "1";
        searchBox.style.transform = "translateY(0)";
        searchBox.style.pointerEvents = "auto";
        navbar.style.padding = "15px 15px"; // Restore original padding
        navbar.style.height = "auto"; // Restore original height
      }
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  }

  window.addEventListener("scroll", handleScroll);
});
