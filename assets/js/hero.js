jQuery(document).ready(function ($) {
  // Fetch dynamic hero data from the admin panel (replace 'your-api-endpoint' with the actual endpoint)
  $.ajax({
    url: "/api/get-hero-data", // Adjust this to match your API route
    method: "GET",
    dataType: "json",
    success: function (data) {
      if (data.image) {
        $(".hero-left").css("background-image", "url(" + data.image + ")");
      }
      if (data.title) {
        $(".hero-content h2").text(data.title);
      }
      if (data.description) {
        $(".hero-content p").text(data.description);
      }
    },
    error: function () {
      console.error("Failed to fetch hero data");
    },
  });

  // Slick Carousel Initialization
  $(".hero-carousel").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    rtl: true,
    prevArrow:
      '<button class="carousel-prev"><i class="fas fa-chevron-right"></i></button>',
    nextArrow:
      '<button class="carousel-next"><i class="fas fa-chevron-left"></i></button>',
  });

  $(".carousel-prev, .carousel-next").wrapAll(
    "<div class='carousel-controls'></div>"
  );
});
