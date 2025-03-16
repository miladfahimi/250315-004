<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- HEADER -->
<header>
    <nav class="navbar">
        <div class="navbar-content">
        <div class="nav-top">

            <div class="nav-right">
                <ul class="nav-links">
                    <li class="dropdown">
                        <a href="#" id="menu-toggle">فروشگاه</a>
                        <ul class="dropdown-menu" id="main-menu">
                            <li class="back-item">
                                <a href="#" class="submenu-toggle" data-submenu="submenu-racket">
                                    <span>راکت تنیس</span> <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="back-item">
                                <a href="#" class="submenu-toggle" data-submenu="submenu-shoes">
                                    <span>کفش تنیس</span> <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li><a href="#"><span>زه راکت</span></a></li>
                            <li><a href="#"><span>توپ تنیس</span></a></li>
                            <li class="back-item">
                                <a href="#" class="submenu-toggle" data-submenu="submenu-bags">
                                    <span>ساک و کوله پشتی</span> <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="back-item">
                                <a href="#" class="submenu-toggle" data-submenu="submenu-accessories">
                                    <span>لوازم جانبی</span> <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li><a href="#"><span>پوشاک</span></a></li>
                        </ul>
                                      <!-- راکت تنیس -->
              <ul class="dropdown-menu submenu" id="submenu-racket">
                <li><a href="#" class="back-to-main"><i class="fas fa-chevron-right"></i> <span>راکت تنیس</span></a>
                </li>
                <li><a href="#"><span>راکت تنیس بابولات</span></a></li>
                <li><a href="#"><span>راکت تنیس هد</span></a></li>
                <li><a href="#"><span>راکت تنیس ویلسون</span></a></li>
                <li><a href="#"><span>راکت تنیس یونکس</span></a></li>
                <li class="divider"></li>
                <li><a href="#" class="view-all"><span>همه محصولات</span></a></li>
              </ul>

              <!-- کفش تنیس -->
              <ul class="dropdown-menu submenu" id="submenu-shoes">
                <li><a href="#" class="back-to-main"><i class="fas fa-chevron-right"></i> <span>کفش تنیس</span></a></li>
                <li><a href="#"><span>کفش تنیس زنانه</span></a></li>
                <li><a href="#"><span>کفش تنیس مردانه</span></a></li>
                <li class="divider"></li>
                <li><a href="#" class="view-all"><span>همه محصولات</span></a></li>
              </ul>

              <!-- ساک و کوله پشتی -->
              <ul class="dropdown-menu submenu" id="submenu-bags">
                <li><a href="#" class="back-to-main"><i class="fas fa-chevron-right"></i> <span>ساک و کوله
                      پشتی</span></a></li>
                <li><a href="#"><span>ساک تنیس</span></a></li>
                <li><a href="#"><span>کوله پشتی تنیس</span></a></li>
                <li class="divider"></li>
                <li><a href="#" class="view-all"><span>همه محصولات</span></a></li>
              </ul>

              <!-- لوازم جانبی -->
              <ul class="dropdown-menu submenu" id="submenu-accessories">
                <li><a href="#" class="back-to-main"><i class="fas fa-chevron-right"></i> <span>لوازم جانبی</span></a>
                </li>
                <li><a href="#"><span>اورگریپ</span></a></li>
                <li><a href="#"><span>ضربه گیر</span></a></li>
                <li><a href="#"><span>مجیند</span></a></li>
                <li><a href="#"><span>مین گریپ</span></a></li>
                <li><a href="#"><span>هدبند</span></a></li>
                <li class="divider"></li>
                <li><a href="#" class="view-all"><span>همه محصولات</span></a></li>
              </ul>

                    </li>
                    <li><a href="#">پیشنهاد ویژه</a></li>
                    <li><a href="#">مقالات</a></li>
                </ul>
            </div>

            <div class="nav-left-phones">
                <div class="nav-account">
                    <a href="#" class="nav-account-toggle" id="accountToggle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.png" alt="حساب کاربری"> <span class="login-text"> ورود/عضویت</span>
                    </a>
                    <ul class="nav-account-menu" id="accountDropdown">
                        <li><a href="<?php echo esc_url(wp_login_url()); ?>"><span>حساب کاربری</span> <i class="fas fa-chevron-left"></i></a></li>
                        <li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><span> خروج</span><i class="fas fa-chevron-left"></i> </a></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="nav-cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/purchase.gif" alt="سبد خرید">
                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
            </div>
            </div>

            <div class="nav-center">
                <div class="search-box">
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                        <input type="text" name="s" placeholder="دنبال چه محصولی هستید؟" value="<?php echo get_search_query(); ?>">
                        <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" alt="جستجو"></button>
                    </form>
                </div>
            </div>

            <div class="nav-left">
                <div class="nav-account">
                    <a href="#" class="nav-account-toggle" id="accountToggle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.png" alt="حساب کاربری"> <span> ورود/عضویت</span>
                    </a>
                    <ul class="nav-account-menu" id="accountDropdown">
                        <li><a href="<?php echo esc_url(wp_login_url()); ?>"><span>حساب کاربری</span> <i class="fas fa-chevron-left"></i></a></li>
                        <li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><span> خروج</span><i class="fas fa-chevron-left"></i> </a></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="nav-cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/purchase.gif" alt="سبد خرید">
                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
            </div>
        </div>
    </nav>
</header>
