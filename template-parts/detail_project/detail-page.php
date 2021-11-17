  <!-- <section class="menu__container w-100 position-fixed" id="menu__container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div>
          <img src="./images/poiter.svg" alt="" />
          <img class="ms-2" src="./images/tekup.svg" alt="" />
        </div>
        <div class="menu__language__title">NGÔN NGỮ</div>
        <div class="menu__language">
          <input id="menu__language__toggle" type="checkbox" class="d-none" />
          <label for="menu__language__toggle" class="menu__language__animate d-flex align-items-center">
            <img src="./images/flag_vietnam.png" alt="" />
            <i class="fa fa-chevron-down ms-2" aria-hidden="true"></i>
          </label>
          <div class="menu__language__animate dropdown">
            <div class="menu__language__animate">
              <img src="./images/flag_english.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <label for="menu__checkbox" class="menu__right d-flex align-items-center justify-content-center">
        <img src="./images/bars.svg" alt="" />
      </label>
      <input type="checkbox" id="menu__checkbox" class="d-none" />
      <div class="menu__main d-flex flex-column justify-content-between">
        <label for="menu__checkbox" class="w-100 text-end">
          <img src="./images/Close.svg" alt="" />
        </label>
        <div class="menu__main__list text-center">
          <div class="p-2 p-lg-4">
            <a href="hompage.html" class="position-relative text-decoration-none">
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
            <a href="about.html" class="position-relative text-decoration-none">
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
            <a href="project.html" class="position-relative text-decoration-none">
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
            <a href="service.html" class="position-relative text-decoration-none">
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
            <a href="contact.html" class="position-relative text-decoration-none">
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
  </section> -->
  <section class="detailpage__section">
    <div class="container-fluid detailpage_container">
      <div class="row project__image">
        <div class="col-sm-6">
          <div class="row my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <div class="col-lg-7 project__image__1">
              <figure class="figure" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo get_template_directory_uri() ?>/images/project_1.png" itemprop="contentUrl" data-size="1024x1024">
                  <img src="<?php echo get_template_directory_uri() ?>/images/project_1.png" itemprop="thumbnail" alt="Image project 1" class="figure-img img-fluid rounded" />
                </a>
                <figcaption itemprop="caption description">Project Image 1</figcaption>
              </figure>
            </div>
            <div class="col-lg-5 project__image__2">
              <figure class="w-100 shadow-1-strong rounded" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo get_template_directory_uri() ?>/images/project_2.png" itemprop="contentUrl" data-size="1024x1024">
                  <img src="<?php echo get_template_directory_uri() ?>/images/project_2.png" alt="Lightbox image 1" class="w-100 mb-2 mb-md-3 shadow-1-strong rounded" />
                </a>
                <figcaption itemprop="caption description">Project Image 2</figcaption>
              </figure>
              <figure class="figure" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo get_template_directory_uri() ?>/images/project_3.png" itemprop="contentUrl" data-size="1024x1024">
                  <img src="<?php echo get_template_directory_uri() ?>/images/project_3.png" alt="Lightbox image 2" class="figure-img img-fluid rounded" />
                </a>
                <figcaption itemprop="caption description">Project Image 3</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-sm-6 project__content">
          <div class="text__title">
            <h2>Boxgo Fulfilment</h2>
            <h5>UI/UX Design</h5>
            <div class="text__inform">
              <ul class="text">
                <h6>Thông tin dự án</h6>
                <li>
                  Created by TekUp, Boxgo is a specialized system for project
                  management and operations management for construction
                  companies.
                </li>
              </ul>
              <ul class="text">
                <h6>Thời gian thực hiện</h6>
                <li>06 tháng</li>
              </ul>
              <ul class="text">
                <h6>Công nghệ</h6>
                <li>.Node js .React .Flutter .Laverel</li>
              </ul>
            </div>

            <div class="project_detail_link">
              <button class="button"><a href="#">Truy cập trang web</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="other__project_section">
    <div class="container mt-5 other__project_content">
      <h2>Dự án khác</h2>
      <div class="owl-carousel my-gallery other_project_carousel">
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri()?>/images/project_item1.png" class="owl-lazy">
            <h5 class="card-title">Boxgo Fulfilment</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item2.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item3.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item4.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item5.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item6.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item7.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="item">
            <img data-src="<?php echo get_template_directory_uri() ?>/images/project_item8.png" class="owl-lazy">
            <h5 class="card-title">AI Plan Chedule</h5>
            UI/UX Design
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="other__project_space">

  </div>
  <section>

    <!--***** PHOTOSWIPE *****-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>

            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut">
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip">
            </div>
          </div>

          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>

        </div>
      </div>
    </div>

  </section>
  <!-- <section class="footer__container d-flex justify-content-center px-3">
    <div class="footer__content">
      <div class="footer__main row m-0">
        <div class="footer__main__contact col-lg-5 p-0">
          <div class="pb-3 d-flex align-items-center">
            <img src="/images/mini-logo.svg" alt="" />
          </div>
          <div class="py-3">
            <img src="./images/icon_email.svg" alt="" />
            <span class="ms-3">info@tekup.com</span>
          </div>
          <div class="pb-3 d-flex align-items-center">
            <img src="./images/icon_phone.svg" alt="" />
            <span class="ms-3">+84 XXX XXX</span>
          </div>
          <div class="d-flex align-items-start">
            <img src="./images/icon_location.svg" alt="" />
            <span class="ms-3">
              259 Hùng Vương, Vĩnh Trung,<br />Thanh Khê, Đà Nẵng</span>
          </div>
        </div>
        <div class="col-lg-3 px-0 pb-4">
          <div class="footer__title pb-4">DỊCH VỤ</div>
          <div class="pb-3">Consulting & Management</div>
          <div class="pb-3">AI & Computer Vision</div>
          <div>Mobile & Web Development</div>
        </div>
        <div class="col-lg-2 px-0 pb-4 pt-2">
          <div class="footer__title pb-4">VỀ TEKUP</div>
          <div class="pb-3">About company</div>
          <div>Meet the team</div>
        </div>
        <div class="col-lg-2 px-0 pt-2">
          <div class="footer__title pb-4">CASE STUDIES</div>
          <div class="footer__title">FAQ</div>
        </div>
      </div>
      <hr class="m-0" />
      <div class="pt-3 pb-4 d-flex align-items-center justify-content-between">
        <div class="footer__media__left">@ 2021 Tekup Solutions</div>
        <div>
          <a href="#">
            <img src="./images/icon_facebook.svg" alt="" />
          </a>
          <a href="#"><img class="ms-3" src="./images/icon_twitter.svg" alt="" /></a>
          <a href="#"><img class="ms-3" src="./images/icon_instagram.svg" alt="" /></a>
          <a href="#"><img class="ms-3" src="./images/icon_youtobe.svg" alt="" /></a>
        </div>
      </div>
    </div>
  </section> -->