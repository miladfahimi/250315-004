document.addEventListener("DOMContentLoaded", function () {
  function toPersianNumber(number) {
    return number.toString().replace(/\d/g, (d) => "۰۱۲۳۴۵۶۷۸۹"[d]);
  }

  const carousel = document.querySelector(".string-carousel");
  const carouselGrid = document.querySelector(".string-grid");
  const prevBtn = document.querySelector(".strings-prev-btn");
  const nextBtn = document.querySelector(".strings-next-btn");
  const carouselCount = document.querySelector(".strings-carousel-count");

  let itemWidth = document.querySelector(".string-card").offsetWidth;
  let itemsPerPage = 3;
  let totalItems = document.querySelectorAll(".string-card").length;
  let totalPages = Math.ceil(totalItems / itemsPerPage);
  let currentPage = totalPages; // Start from the rightmost page in RTL

  function updatePagination() {
    carouselCount.textContent = `${toPersianNumber(
      currentPage
    )} از ${toPersianNumber(totalPages)}`;
  }

  nextBtn.addEventListener("click", function () {
    if (currentPage > 1) {
      currentPage--;
      carousel.scrollBy({
        left: -itemWidth * itemsPerPage,
        behavior: "smooth",
      });
      updatePagination();
    }
  });

  prevBtn.addEventListener("click", function () {
    if (currentPage < totalPages) {
      currentPage++;
      carousel.scrollBy({ left: itemWidth * itemsPerPage, behavior: "smooth" });
      updatePagination();
    }
  });

  // Enable dragging for scrolling
  let isDown = false;
  let startX;
  let scrollLeft;

  carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    carousel.classList.add("active");
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("mouseleave", () => {
    isDown = false;
    carousel.classList.remove("active");
  });

  carousel.addEventListener("mouseup", () => {
    isDown = false;
    carousel.classList.remove("active");
  });

  carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2; // Adjust drag speed for RTL
    carousel.scrollLeft = scrollLeft + walk;
  });

  updatePagination();
});
