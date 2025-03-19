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

    let itemsPerPage = 4;
    let totalItems = items.length;
    let totalPages = Math.ceil(totalItems / itemsPerPage);
    let currentPage = 1;

    let itemWidth = items[0].offsetWidth;
    let computedStyle = window.getComputedStyle(items[0]);
    let itemMarginRight = parseFloat(computedStyle.marginRight);
    let totalMoveDistance = (itemWidth + itemMarginRight) * itemsPerPage;

    function updatePagination() {
      carouselCount.textContent = `${toPersianNumber(
        currentPage
      )} از ${toPersianNumber(totalPages)}`;
    }

    function updateCarouselPosition() {
      let offset = (currentPage - 1) * totalMoveDistance;
      carouselGrid.style.transform = `translateX(${-offset}px)`;
      updatePagination();
    }

    prevBtn.addEventListener("click", function () {
      if (currentPage > 1) {
        currentPage--;
        updateCarouselPosition();
      }
    });

    nextBtn.addEventListener("click", function () {
      if (currentPage < totalPages) {
        currentPage++;
        updateCarouselPosition();
      }
    });

    let isDown = false;
    let startX;
    let scrollLeft;

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
      setTimeout(updatePaginationOnScroll, 300);
    });

    carousel.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - carousel.offsetLeft;
      const walk = startX - x;
      carousel.scrollLeft = scrollLeft + walk;
    });

    carousel.addEventListener("touchstart", (e) => {
      isDown = true;
      startX = e.touches[0].pageX - carousel.offsetLeft;
      scrollLeft = carousel.scrollLeft;
    });

    carousel.addEventListener("touchmove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.touches[0].pageX - carousel.offsetLeft;
      const walk = startX - x;
      carousel.scrollLeft = scrollLeft + walk;
    });

    carousel.addEventListener("touchend", () => {
      isDown = false;
      setTimeout(updatePaginationOnScroll, 300);
    });

    function updatePaginationOnScroll() {
      let scrollPosition = Math.abs(carousel.scrollLeft);
      let newPage = Math.round(scrollPosition / totalMoveDistance) + 1;
      newPage = Math.max(1, Math.min(newPage, totalPages));

      if (newPage !== currentPage) {
        currentPage = newPage;
        updatePagination();
      }
    }

    carousel.addEventListener("scroll", () => {
      setTimeout(updatePaginationOnScroll, 200);
    });

    updateCarouselPosition();
  });
});
