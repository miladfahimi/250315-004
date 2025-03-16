document.addEventListener("DOMContentLoaded", function () {
  function toPersianNumber(number) {
    return number.toString().replace(/\d/g, (d) => "۰۱۲۳۴۵۶۷۸۹"[d]);
  }

  document.querySelectorAll(".racket-carousel").forEach((carousel) => {
    const carouselGrid = carousel.querySelector(".racket-grid");
    const items = carousel.querySelectorAll(".racket-card");
    const prevBtn = carousel.closest("section").querySelector(".prev-btn");
    const nextBtn = carousel.closest("section").querySelector(".next-btn");
    const carouselCount = carousel
      .closest("section")
      .querySelector(".carousel-count");

    let totalItems = items.length;
    let itemsPerPage = 4;
    let totalPages = Math.ceil(totalItems / itemsPerPage);
    let currentPage = 1;

    // Get accurate item width + margin
    let itemWidth = items[0].offsetWidth;
    let computedStyle = window.getComputedStyle(items[0]);
    let itemMarginRight = parseFloat(computedStyle.marginRight);

    // 🔥 HARD-CODED FIX: Adjust this value manually if needed
    const ADJUSTMENT_OFFSET = 100; // Adjust this number to fine-tune movement

    let totalMoveDistance =
      (itemWidth + itemMarginRight) * itemsPerPage + ADJUSTMENT_OFFSET;

    function updateCarouselPosition() {
      let offset = (currentPage - 1) * totalMoveDistance;
      carouselGrid.style.transform = `translateX(${offset}px)`;
      carouselCount.textContent = `${toPersianNumber(
        currentPage
      )} از ${toPersianNumber(totalPages)}`;
    }

    nextBtn.addEventListener("click", function () {
      if (currentPage < totalPages) {
        currentPage++;
        updateCarouselPosition();
      }
    });

    prevBtn.addEventListener("click", function () {
      if (currentPage > 1) {
        currentPage--;
        updateCarouselPosition();
      }
    });

    updateCarouselPosition();
  });
});
