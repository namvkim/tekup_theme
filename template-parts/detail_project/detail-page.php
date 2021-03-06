<section class="d-flex justify-content-center px-3">
      <div class="pro__details__main__content justify-content-between">
        <div class="pro__details__main__left">
          <div class="photos">
            <div class="item pro__details__img__1">
              <a
                href=""
                data-lightbox="photos"
                ><img
                  class="img-fluid"
                  src="<?php echo $picture1 ?>"
                />
              </a>
            </div>
            <div class="item pro__details__img__2">
              <a
                href=""
                data-lightbox="photos"
                ><img
                  class="img-fluid"
                  src="<?php echo $picture2 ?>"
              /></a>
            </div>
            <div class="item pro__details__img__3">
              <a
                href=""
                data-lightbox="photos"
                ><img
                  class="img-fluid"
                  src="<?php echo $picture3 ?>"
              /></a>
            </div>
          </div>
        </div>
        <div class="pro__details__main__right">
          <?php
              the_title( '<div class="pro__details__main__title mb-3">', '</div>' )
          ?>
          <div class="pro__details__main__sub"><?php echo $subtitle ?></div>
          <div class="pro__details__main__title2 mb-2"><?php echo $projectinform?></div>
          <div class="pro__details__main__sub2">
          <?php echo $sub_inform ?></div>
          <div class="pro__details__main__title2 mb-2"><?php echo $time ?></div>
          <div class="pro__details__main__sub2"><?php echo $sub_time ?></div>
          <div class="pro__details__main__title2 mb-2"><?php echo $technical ?></div>
          <div class="pro__details__main__sub2"><?php echo $sub_technical ?></div>

          <a href="<?php echo site_url('/'); ?>">
            <div
              class="
                pro__details__main__btn
                d-flex
                justify-content-center
                align-items-center
              "
            >
              <div class="pro__details__main__btn__title">
                TRUY C???P TRANG WEB
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
    <section
      class="
        pro__details__carousel__container
        d-flex
        justify-content-center
        px-3
      "
    >
      <div class="pro__details__carousel__content">
        <div class="pro__details__carousel__title">D??? ??n kh??c</div>
        <div class="owl-carousel pro__details__carousel__main">
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item1.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              Boxgo Fulfilment
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item2.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item3.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item4.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item5.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item6.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item7.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
          <div class="pro__details__carousel__item">
            <img data-src="images/project_item8.png" class="owl-lazy" />
            <div class="pro__details__carousel__item__title mt-3">
              AI Plan Chedule
            </div>
            <div class="pro__details__carousel__item__sub mt-2">
              UI/UX Design
            </div>
          </div>
        </div>
      </div>
    </section>