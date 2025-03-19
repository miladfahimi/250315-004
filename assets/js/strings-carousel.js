document.addEventListener("DOMContentLoaded", function () {
  function toPersianNumber(number) {
    return number.toString().replace(/\d/g, (d) => "۰۱۲۳۴۵۶۷۸۹"[d]);
  }

  const carousel = document.querySelector(".string-carousel");
  const prevBtn = document.querySelector(".strings-prev-btn");
  const nextBtn = document.querySelector(".strings-next-btn");
  const carouselCount = document.querySelector(".strings-carousel-count");

  let itemWidth = document.querySelector(".string-card").offsetWidth;
  let itemsPerPage = 3;
  let totalItems = document.querySelectorAll(".string-card").length;
  let totalPages = Math.ceil(totalItems / itemsPerPage);
  let currentPage = 1;

  function updatePagination() {
    carouselCount.textContent = `${toPersianNumber(
      currentPage
    )} از ${toPersianNumber(totalPages)}`;
  }

  prevBtn.addEventListener("click", function () {
    if (currentPage > 1) {
      currentPage--;
      carousel.scrollBy({ left: itemWidth * itemsPerPage, behavior: "smooth" });
      updatePagination();
    }
  });

  nextBtn.addEventListener("click", function () {
    if (currentPage < totalPages) {
      currentPage++;
      carousel.scrollBy({
        left: -itemWidth * itemsPerPage,
        behavior: "smooth",
      });
      updatePagination();
    }
  });

  // Enable dragging for scrolling (Fix for iOS Safari & Chrome)
  let isDown = false;
  let startX;
  let scrollLeft;

  carousel.addEventListener("touchstart", (e) => {
    isDown = true;
    startX = e.touches[0].pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("touchmove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.touches[0].pageX - carousel.offsetLeft;
    const walk = (startX - x) * 2; // **Reverse the scroll direction for RTL**
    carousel.scrollLeft = scrollLeft + walk;
  });

  carousel.addEventListener("touchend", () => {
    isDown = false;
  });

  carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("mouseleave", () => {
    isDown = false;
  });

  carousel.addEventListener("mouseup", () => {
    isDown = false;
  });

  carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (startX - x) * 2; // **Reverse the scroll direction for RTL**
    carousel.scrollLeft = scrollLeft + walk;
  });

  updatePagination();
});
