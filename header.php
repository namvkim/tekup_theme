<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-tekup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>Tekup Solution</title>
  <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
  <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

  <!-- css -->
  <!-- <link rel="stylesheet" href="./css/style.css" /> -->

  <!-- google font  -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--Carousel-->
  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="css/animate.css" /> -->
  <?php wp_head(); ?>
</head>
<body id="homepage" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <section class="menu__container w-100 position-fixed" id="menu__container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <div>
            <img src="<?php echo get_template_directory_uri() ?>/images/poiter.svg" alt="" />
            <img class="ms-2" src="<?php echo get_template_directory_uri() ?>/images/tekup.svg" alt="" />
          </div>
          <div class="menu__language__title">NGÔN NGỮ</div>
          <div class="menu__language">
            <input id="menu__language__toggle" type="checkbox" class="d-none" />
            <label for="menu__language__toggle" class="menu__language__animate d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri() ?>/images/flag_vietnam.png" alt="" />
              <i class="fa fa-chevron-down ms-2" aria-hidden="true"></i>
            </label>
            <div class="menu__language__animate dropdown">
              <div class="menu__language__animate">
                <img src="<?php echo get_template_directory_uri() ?>/images/flag_english.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <label for="menu__checkbox" class="menu__right d-flex align-items-center justify-content-center">
          <img src="<?php echo get_template_directory_uri() ?>/images/bars.svg" alt="" />
        </label>
        <input type="checkbox" id="menu__checkbox" class="d-none" />
        <div class="menu__main d-flex flex-column justify-content-between">
          <label for="menu__checkbox" class="w-100 text-end">
            <img src="<?php echo get_template_directory_uri() ?>/images/Close.svg" alt="" />
          </label>
          <div class="menu__main__list text-center">
            <div class="p-2 p-lg-4">
              <a href="http://localhost:8080/foxteam/" class="position-relative text-decoration-none">
                <span class="position-relative">Trang chủ</span>
                <hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_homepage" />
              </a>
            </div>
            <div class="p-2 p-lg-4">
              <a href="http://localhost:8080/foxteam/about/" class="position-relative text-decoration-none">
                <span class="position-relative">Về chúng tôi</span>
                <hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_about" />
              </a>
            </div>
            <div class="p-2 p-lg-4">
              <a href="http://localhost:8080/foxteam/project/" class="position-relative text-decoration-none">
                <span class="position-relative">Dự án</span>
                <hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_project" />
              </a>
            </div>
            <div class="p-2 p-lg-4">
              <a href="http://localhost:8080/foxteam/services/" class="position-relative text-decoration-none">
                <span class="position-relative">Dịch vụ</span>
                <hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_service" />
              </a>
            </div>
            <div class="p-2 p-lg-4">
              <a href="http://localhost:8080/foxteam/contact/" class="position-relative text-decoration-none">
                <span class="position-relative">Liên hệ</span>
                <hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_contact" />
              </a>
            </div>
          </div>
          <div class="p-4"></div>
        </div>
        <div class="menu__overlay"></div>
      </div>
    </section>
    <!-- banner -->
    <section class="
        vh-100
        position-relative
        d-flex
        align-items-center
        justify-content-center
        px-3
      ">
      <img class="homepage__banner__img position-absolute top-0 end-0" src="<?php echo get_template_directory_uri() ?>//images/tekupcompanyvideo.gif" alt="" />
      <div class="homepage__banner__main">
        <div id="carouselExampleInterval" class="carousel slide homepage__carousel__content" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <div class="d-flex align-items-center">
                <div>
                  <div id="homepage__banner__title">
                    Dẫn đầu xu hướng, nắm bắt tương lai
                  </div>
                  <div class="homepage__banner__subtitle">
                    Giúp doanh nghiệp của bạn phát triển bằng công nghệ
                    <b>AI</b> và
                    <b>Big Data</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <div class="d-flex align-items-center">
                <div>
                  <div id="homepage__banner__title">
                    Hãy là tất cả những gì bạn muốn
                  </div>
                  <div class="homepage__banner__subtitle">
                    Đà Nẵng – Thành phố không bao giờ ngủ
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <div class="d-flex align-items-center">
                <div>
                  <div id="homepage__banner__title">
                    Chúng tôi luôn cố gắng hơn
                  </div>
                  <div class="homepage__banner__subtitle">
                    Khi sự quan tâm của bạn đủ để gửi đi những điều tốt đẹp nhất
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="
            homepage__banner__button
            d-flex
            justify-content-between
            align-items-center
          ">
          <div>KHÁM PHÁ NGAY</div>
          <img src="<?php echo get_template_directory_uri() ?>/images/poiter.svg" alt="" />
        </div>
        <div class="d-flex align-items-center">
          <div class="homepage__banner__logo__left">
            <div class="homepage__banner__logo__number">+50</div>
            <div class="homepage__banner__logo__title fw-bold text-end">
              ĐỐI TÁC <br />
              TIN TƯỞNG
            </div>
          </div>
          <div class="homepage__banner__logo__center"></div>
          <div class="homepage__banner__logo__right position-relative">
            <div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/google.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/microsoft.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/google.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/microsoft.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/buzzfeed.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/google.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/microsoft.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/google.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/microsoft.svg" alt="" />
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/buzzfeed.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>