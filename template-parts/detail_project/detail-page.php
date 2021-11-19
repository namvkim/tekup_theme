  
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

  
 