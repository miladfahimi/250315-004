
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<body>

  <!-- HEADER -->
  <header>
    <nav class="navbar">
      <div class="navbar-content">
        <div class="nav-right">
          <ul class="nav-links">
            <li class="dropdown">
              <a href="#" id="menu-toggle">منو سایت</a>
              <ul class="dropdown-menu" id="main-menu">
                <li><a href="#" class="submenu-toggle" data-submenu="submenu-racket">راکت تنیس ></a></li>
                <li><a href="#">کفش تنیس زنانه</a></li>
                <li class="divider"></li>
                <li><a href="#">کفش تنیس مردانه</a></li>
              </ul>
              <ul class="dropdown-menu submenu" id="submenu-racket">
                <li><a href="#" class="back-to-main">راکت تنیس</a></li>
                <li><a href="#">راکت تنیس بابولات</a></li>
                <li><a href="#">راکت تنیس ویلسون</a></li>
                <li><a href="#">راکت تنیس هد</a></li>
                <li><a href="#">راکت تنیس یونکس</a></li>
                <li class="divider"></li>
                <li><a href="#" class="view-all">همه محصولات</a></li>
              </ul>
            </li>
            <li><a href="#">پیشنهاد ویژه</a></li>
            <li><a href="#">مقالات</a></li>
          </ul>
        </div>
        <div class="nav-center">
          <div class="search-box">
            <input type="text" placeholder="دنبال چه محصولی هستید؟">
            <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" alt="جستجو"></button>
          </div>
        </div>
        <div class="nav-left">
          <a href="#" class="user-account">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.png" alt="حساب کاربری"> ورود/عضویت
          </a>
          <a href="#" class="cart">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/purchase.gif" alt="سبد خرید">
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-right" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-right.jpg');">
      <div class="hero-content">
        <h2>تنیس اصلی بتر به‌همراه جزئیات آن</h2>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی مفهوم از صنعت چاپ، و</p>
        <button>مشاهده محصولات</button>
      </div>
    </div>
    <div class="hero-left" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-left.jpg');">
      <div class="hero-content">
        <h2>تنیس اصلی بتر</h2>
        <p>لورم ایپسوم متن ساختگی با تولید.</p>
        <button>مشاهده محصولات</button>
      </div>
    </div>
  </section>

  <!-- FAVORITES -->
  <section class="favorite-items">
    <h2>پرطرفدارترین دسته بندی ها</h2>
    <div class="favorite-grid">
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/accessories.jpg" alt="وسایل جانبی">
        <p>وسایل جانبی</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bags.png" alt="کیف و کوله">
        <p>کیف و کوله</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/balls.png" alt="توپ تنیس">
        <p>توپ تنیس</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clothes-women.png" alt="پوشاک زنانه">
        <p>پوشاک زنانه</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clothes.png" alt="پوشاک مردانه">
        <p>پوشاک مردانه</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/string.png" alt="زه راکت">
        <p>زه راکت</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes-women.png" alt="کفش زنانه">
        <p>کفش زنانه</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes.png" alt="کفش مردانه">
        <p>کفش مردانه</p>
        <span>۱۳ محصول</span>
      </div>
      <div class="favorite-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/racket.png" alt="راکت">
        <p>راکت</p>
        <span>۱۳ محصول</span>
      </div>
    </div>
  </section>

  <!-- NEWEST -->
  <section class="newest-rackets">
    <div class="section-header">
      <h2>جدیدترین راکت های ۲۰۲۵</h2>
      <div class="carousel-controls">
        <button class="prev-btn">&lt;</button>
        <span class="carousel-count">۱ از ۴</span>
        <button class="next-btn">&gt;</button>
      </div>
    </div>

    <div class="racket-carousel">
      <div class="racket-grid">
        <!-- Add more racket items -->
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">NEW COLLECTION</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BRANDS -->
  <section class="brands">
    <div class="brand-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/yonex.jpg');">
      <button>خرید از برند Yonex</button>
    </div>
    <div class="brand-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/wilson.jpg');">
      <button>خرید از برند Wilson</button>
    </div>
    <div class="brand-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/babolat.jpg');">
      <button>خرید از برند Babolat</button>
    </div>
    <div class="brand-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/head.jpg');">
      <button>خرید از برند HEAD</button>
    </div>
  </section>

  <!-- PROMOTIONS -->
  <section class="promotion-section">
    <div class="promotion-container">
      <div class="promotion-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/promo-1.jpg');">
        <div class="promotion-content">
          <span class="brand-name">ویلسون</span>
          <h2>راکت های حرفه ای تنیس</h2>
          <p>بهترین خودت باش</p>
        </div>
        <a href="#" class="promotion-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
        </a>
      </div>
      <div class="promotion-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/promo-2.jpg');">
        <div class="promotion-content">
          <span class="brand-name">ویلسون</span>
          <h2>راکت های حرفه ای تنیس</h2>
          <p>بهترین خودت باش</p>
        </div>
        <a href="#" class="promotion-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
        </a>
      </div>
    </div>
  </section>


  <!-- promotion-fullwidth -->
  <section class="fullwidth-promotion">
    <div class="fullwidth-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/promo-2.jpg');">
      <div class="promotion-content">
        <span class="brand-name">ویلسون</span>
        <h2>راکت های حرفه ای تنیس</h2>
        <p>بهترین خودت باش</p>
      </div>
      <a href="#" class="promotion-link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
      </a>
    </div>
  </section>


  <!-- elite-collection -->
  <section class="elite-collection">
    <div class="elite-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top-image.png');"></div>
    <div class="elite-bottom">
      <div class="elite-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bottom-left.jpg');">
        <div class="elite-overlay">
          <p> انواع راکت‌های پاور</p>
          <h4>قدرت مطلق،<br> بدون محدودیت </h4>
          <a href="#" class="elite-link">مشاهده محصولات</a>
        </div>
      </div>
      <div class="elite-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bottom-right.jpg');">
        <div class="elite-overlay">
          <p>انواع راکت‌های کنترلی </p>
          <h4>دقت بی‌نقص،<br> تسلط بر بازی </h4>
          <a href="#" class="elite-link">مشاهده محصولات</a>
        </div>
      </div>
    </div>

    <div class="section-header">
      <h2>پر تخفیف‌ترین راکت‌ها</h2>
      <div class="carousel-controls">
        <button class="prev-btn">&lt;</button>
        <span class="carousel-count">۱ از ۴</span>
        <button class="next-btn">&gt;</button>
      </div>
    </div>

    <div class="racket-carousel">
      <div class="racket-grid">
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">٪۲۰ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۰٬۴۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Wilson"></span>
            <span class="new-badge">٪۱۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس ویلسون">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PRO STAFF 97</p>
              <p class="brand-name">ویلسون</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۲٬۳۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Head"></span>
            <span class="new-badge">٪۱۰ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس هد">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">RADICAL MP</p>
              <p class="brand-name">هد</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۵۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ultimate-performance -->
  <section class="ultimate-performance">
    <div class="ultimate-content">
      <div class="ultimate-product">
        <div class="discounted-product">
          <div class="discount-card">
            <span class="discount-badge">٪۲۵ تخفیف</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex" class="brand-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس" class="discounted-racket">
            <div class="discount-details">
              <div class="discount-texts">
                <h3>راکت تنیس</h3>
                <p class="discount-model">VCORE 98</p>
                <p class="discount-brand">یونکس</p>
              </div>
              <a href="#" class="discount-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="ultimate-text">
        <h2>قدرت مطلق، بدون محدودیت</h2>
        <p>
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحی گرافیک است. چاپگرها و متون
          بلکه روزنامه و مجله در ستون و
        </p>
        <div class="ultimate-price">
          <span class="old-price">۴۴٬۰۰۰٬۰۰۰ تومان</span>
          <span class="new-price">۱۹٬۹۰۰٬۰۰۰ تومان</span>
        </div>
      </div>
    </div>
  </section>

  <!-- string-section -->
  <section class="string-section">
    <div class="main-container">

      <!-- MSV Card -->
      <div class="msv-card">
        <div class="msv-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/msv-bg.jpg');"></div>
        <div class="msv-content">
          <h3>تنها واردکننده‌ی <br> محصولات MSV</h3>
          <a href="#" class="msv-button">مشاهده و مقایسه</a>
        </div>
      </div>


      <!-- Wrapper for Carousel & String Cards -->
      <div class="string-wrapper">

        <!-- Title & Pagination (Expands only on string cards) -->
        <div class="string-header">
          <h2>زه های راکت MVS</h2>
          <div class="carousel-controls">
            <button class="prev-btn">&lt;</button>
            <span class="carousel-count">۱ از ۴</span>
            <button class="next-btn">&gt;</button>
          </div>
        </div>

        <!-- String Carousel -->
        <div class="string-carousel">
          <div class="string-grid">
            <div class="string-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/string-product.jpg" alt="زه راکت MVS">
              <div class="string-details">
                <h3>MSV Co Focus</h3>
                <div class="detail-row">
                  <span class="detail-key">ضخامت</span>
                  <span class="detail-value">۱.۳۳ mm</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">طول</span>
                  <span class="detail-value">۲۰۰ M</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">رنگ</span>
                  <span class="detail-value">Skyblue</span>
                </div>
              </div>

              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
            <div class="string-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/string-product.jpg" alt="زه راکت MVS">
              <div class="string-details">
                <h3>MSV Co Focus</h3>
                <div class="detail-row">
                  <span class="detail-key">ضخامت</span>
                  <span class="detail-value">۱.۳۳ mm</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">طول</span>
                  <span class="detail-value">۲۰۰ M</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">رنگ</span>
                  <span class="detail-value">Skyblue</span>
                </div>
              </div>

              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
            <div class="string-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/string-product.jpg" alt="زه راکت MVS">
              <div class="string-details">
                <h3>MSV Co Focus</h3>
                <div class="detail-row">
                  <span class="detail-key">ضخامت</span>
                  <span class="detail-value">۱.۳۳ mm</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">طول</span>
                  <span class="detail-value">۲۰۰ M</span>
                </div>
                <div class="detail-row">
                  <span class="detail-key">رنگ</span>
                  <span class="detail-value">Skyblue</span>
                </div>
              </div>

              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
            <!-- More string-card items -->
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- elite-shoes-collection -->
  <section class="elite-collection">
    <div class="elite-bottom">
      <div class="elite-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shoes-left.jpg');">
        <div class="elite-overlay">
          <p> انواع راکت‌های پاور</p>
          <h4>قدرت مطلق،<br> بدون محدودیت </h4>
          <a href="#" class="elite-link">مشاهده محصولات</a>
        </div>
      </div>
      <div class="elite-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shoes-right.jpg');">
        <div class="elite-overlay">
          <p>انواع راکت‌های کنترلی </p>
          <h4>دقت بی‌نقص،<br> تسلط بر بازی </h4>
          <a href="#" class="elite-link">مشاهده محصولات</a>
        </div>
      </div>
    </div>

    <div class="section-header">
      <h2>پرفروش ترین کفش‌ها </h2>
      <div class="carousel-controls">
        <button class="prev-btn">&lt;</button>
        <span class="carousel-count">۱ از ۴</span>
        <button class="next-btn">&gt;</button>
      </div>
    </div>

    <div class="racket-carousel">
      <div class="racket-grid">
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Babolat"></span>
            <span class="new-badge">٪۲۰ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes-1.jpg" alt="راکت تنیس بابولات">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PURE AERO TEAM</p>
              <p class="brand-name">بابولات</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۰٬۴۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Wilson"></span>
            <span class="new-badge">٪۱۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes-2.jpg" alt="راکت تنیس ویلسون">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">PRO STAFF 97</p>
              <p class="brand-name">ویلسون</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۲٬۳۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Head"></span>
            <span class="new-badge">٪۱۰ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes-3.png" alt="راکت تنیس هد">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">RADICAL MP</p>
              <p class="brand-name">هد</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۱۳٬۵۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes-4.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
        <div class="racket-card">
          <div class="card-header">
            <span class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            <span class="new-badge">٪۲۵ تخفیف</span>
          </div>
          <div class="racket-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
            <div class="racket-details">
              <h3>راکت تنیس</h3>
              <p class="model-name">VCORE 98</p>
              <p class="brand-name">یونکس</p>
              <div class="card-footer">
                <button class="view-btn">مشاهده</button>
                <span class="price">۹٬۰۰۰٬۰۰۰ تومان</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST SALES -->
  <section class="sales-section">
    <h3 class="sales-header">برترین پیشنهادهای ما</h3>
    <div class="sales-container">

      <div class="sales-block">
        <div class="sales-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/promo-1.jpg');">
          <div class="sales-content">
            <span class="sales-brand">ویلسون</span>
            <h2>راکت های حرفه ای تنیس</h2>
            <p>بهترین خودت باش</p>
          </div>
          <a href="#" class="promotion-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
          </a>
        </div>
        <div class="best-sales-grid">
          <div class="best-sales-card">
            <div class="card-header-sales">
              <span class="brand-logo-sales"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            </div>
            <div class="product-info">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
              <div class="product-sales-details">
                <p class="sales-discount">VCORE 98</p>
                <p class="sales-brand">یونکس</p>
              </div>
            </div>
          </div>

          <div class="best-sales-card">
            <div class="card-header-sales">
              <span class="brand-logo-sales"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            </div>
            <div class="product-info">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
              <div class="product-sales-details">
                <p class="sales-discount">VCORE 98</p>
                <p class="sales-brand">یونکس</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sales-block">
        <div class="sales-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/promo-2.jpg');">
          <div class="sales-content">
            <span class="sales-brand">ویلسون</span>
            <h2>راکت های حرفه ای تنیس</h2>
            <p>بهترین خودت باش</p>
          </div>
          <a href="#" class="promotion-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-box-icon.jpg" alt="مشاهده">
          </a>
        </div>
        <div class="best-sales-grid">
          <div class="best-sales-card">
            <div class="card-header-sales">
              <span class="brand-logo-sales"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            </div>
            <div class="product-info">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
              <div class="product-sales-details">
                <p class="sales-discount">VCORE 98</p>
                <p class="sales-brand">یونکس</p>
              </div>
            </div>
          </div>

          <div class="best-sales-card">
            <div class="card-header-sales">
              <span class="brand-logo-sales"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/babolat-logo.png" alt="Yonex"></span>
            </div>
            <div class="product-info">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tennis-rackets.jpg" alt="راکت تنیس یونکس">
              <div class="product-sales-details">
                <p class="sales-discount">VCORE 98</p>
                <p class="sales-brand">یونکس</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- PLAYER SECTION -->
  <section class="players-section">
    <div class="players-grid">
      <div class="player-box">
        <button class="player-btn">بازیکن تنیس شماره ۴</button>
      </div>
      <div class="player-box">
        <button class="player-btn">بازیکن تنیس شماره ۳</button>
      </div>
      <div class="player-box">
        <button class="player-btn">بازیکن تنیس شماره ۲</button>
      </div>
      <div class="player-box">
        <button class="player-btn">بازیکن تنیس شماره ۱</button>
      </div>
    </div>
  </section>


  <!-- ARTICLE SECTION -->
  <section class="educational-section">
    <div class="educational-container">

      <!-- Article Wrapper -->
      <div class="educational-wrapper">
        <!-- Header -->
        <div class="educational-header">
          <h2>مقالات آموزشی</h2>
          <button class="all-articles-btn">همه مقالات</button>
        </div>

        <!-- Articles Grid -->
        <div class="educational-grid">
          <div class="educational-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/article-1.jpg');">
            <div class="educational-content">
              <p class="educational-meta">دسته بندی | ۳ اسفند ۱۴۳۷</p>
              <h3>راهنمای انتخاب زه مناسب برای راکت تنیس</h3>
            </div>
          </div>
          <div class="educational-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/article-2.jpg');">
            <div class="educational-content">
              <p class="educational-meta">دسته بندی | ۳ اسفند ۱۴۳۷</p>
              <h3>راهنمای انتخاب زه مناسب برای راکت تنیس</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- MSV Card -->
      <div class="educational-msv-card">
        <div class="educational-msv-content">
          <h3>تنها واردکننده‌ی <br> محصولات MSV</h3>
          <a href="#" class="educational-msv-button">مشاهده و مقایسه</a>
        </div>
      </div>
    </div>
  </section>







  <footer>
    <p>© ۲۰۲۵ تمامی حقوق محفوظ است | تک تنیس</p>
  </footer>

  <!-- Include script at the end to ensure smooth execution -->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>

</html>