<section class="
        about__title__container
        d-flex
        justify-content-center
        position-relative
        px-3
      ">
  <img class="about__title__img" src="<?php echo get_template_directory_uri() ?>/images/background_dot3d.gif" alt="" />
  <div class="about__title__content">
    <div class="
            about__title__header
            d-flex
            justify-content-center
            align-items-center
          ">
      Về chúng tôi
    </div>
    <div class=" row about__title__body">
      <div class="col-lg-6 col-sm-6 col-md-6 about__title__body__left">
        Nhà phát triển <br />
        App & Web hàng đầu
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 about__title__body__right">
        <div class="about__title__body__title">
          “Sự phát triển của Tekup Solutions được gầy dựng bởi sự nhiệt
          huyết, chăm chỉ và tài giỏi từ đội ngũ nhân viên của chúng tôi”
        </div>
        <div class="about__title__body__content">
          Tại Tekup, chúng tôi coi sự trưởng thành của nhân viên trong cuộc
          sống và tiến độ dự án là kim chỉ nam để công ty phát triển bền
          vững. Chúng tôi ưu tiên một nhân viên làm việc thông minh hơn chứ
          khong phải chăm chỉ hơn. Cho nên bạn không cần phải là người làm
          việc vào buổi sáng và là người cuối cùng rời khỏi văn phòng.
          <br /><br />
          Chúng tôi khuyến khích nhân viên của mình phạm sai lầm thay vì giả
          mạo sự hoàn hảo bởi vì họ là bằng chứng sống cho sự cố gắng của
          công ty.
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about__value__container position-relative px-3">
  <img src="<?php echo get_template_directory_uri() ?>/images/about_background_1.png" alt="" class="
          about__value__background
          w-100
          h-100
          position-absolute
          start-0
          top-0
        " />
  <img src="<?php echo get_template_directory_uri() ?>/images/about_value_icon.png" />
  <div class="about__value__title">
    Giá trị cốt lõi tạo nên sự khác biệt
  </div>
  <div class="about__value__subtitle">
    Nhanh - Mạnh mẽ - Trách nhiệm - Tập trung
  </div>
</section>
<section class="about__direction__container px-3">
  <div class="row about__direction__content">
    <div class="col-lg-6 col-sm-6 col-md-6 about__direction__item">
      <img src="<?php echo get_template_directory_uri() ?>/images/object.png" alt="mountain" />
      <div class="about__direction__title">Tầm nhìn</div>
      <div class="about__direction__subtitle">
        Trở thành công ty công nghệ hàng đầu nhờ sự sáng tạo và khác biệt,
        mang trong mình giá trị nhân văn sâu sắc
      </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 about__direction__item">
      <img src="<?php echo get_template_directory_uri() ?>/images/bullseye 1.png" alt="hh" />
      <div class="about__direction__title">Sứ mạng</div>
      <div class="about__direction__subtitle">
        Biến những ý tưởng và nhu cầu của khách hàng thành giá trị kinh
        doanh bằng cách phát triển các giải pháp ổn định và sáng tạo với
        chuyên môn cao và tinh thần trách nhiệm
      </div>
    </div>
  </div>
</section>
<hr class="about__space" />
<section class="px-3 d-flex justify-content-center position-relative">
  <img src="<?php echo get_template_directory_uri() ?>/images/about_stroke_1.png" alt="" class="about__gallery__stroke__1 position-absolute end-0" />
  <div class="about__gallery__content">
    <div class="about__gallery__title">
      Hãy gặp những người đã thúc đẩy tương lai ngành IT phát triển.
    </div>
    <div class="d-flex flex-wrap justify-content-between align-items-start">
      <img src="<?php echo get_template_directory_uri() ?>/images/Rectangle 12.png" alt="" class="about__gallery__img__1" />
      <img src="<?php echo get_template_directory_uri() ?>/images/Rectangle 16.png" alt="" class="about__gallery__img__2" />
      <img src="<?php echo get_template_directory_uri() ?>/images/Rectangle 15.png" alt="" class="about__gallery__img__2" />
    </div>
    <div class="about__gallery__staff d-flex justify-content-between flex-wrap">
      <?php $args = array(
        'post_type' => 'post',
        'post_per_page' => 10,
        'category_name' => 'staff',
        'orderby' => 'date',
        'order' => 'asc'
      );

      $loop = new WP_Query($args);

      while ($loop->have_posts()) : $loop->the_post();
        echo '  <div class="about__gallery__staff__item">';
        echo get_the_post_thumbnail($post->ID, 'category-thumb');
        the_title('<div class="about__gallery__staff__position">', '</div>');
        echo '<div class="about__gallery__staff__name">' . the_content(). '</div>';
        echo '</div>';
      endwhile;
      wp_reset_query();
      ?>
    </div>
  </div>
</section>
<section class="
        about__statistics__container
        d-flex
        flex-column
        align-items-center
        position-relative
        px-3
      ">
  <img src="<?php echo get_template_directory_uri() ?>/images/about_background_2.png" alt="" class="about__statistics__background position-absolute start-0 top-0" />
  <div class="about__statistics__title text-center">
    Những con số ấn tượng
  </div>
  <div class="
          about__statistics__content
          d-flex
          justify-content-between
          flex-wrap
        ">
    <div class="about__statistics__box">
      <div class="about__statistics__number d-flex mb-2">
        <div class="homepage__statistics__counter">150</div>
      </div>
      <div class="homepage__statistics__title">Impactful Products</div>
    </div>
    <div class="about__statistics__box">
      <div class="about__statistics__number d-flex mb-2">
        <div class="homepage__statistics__counter">400</div>
        <div class="homepage__statistics__plus">+</div>
      </div>
      <div class="homepage__statistics__title">Successful Projects</div>
    </div>
    <div class="about__statistics__box">
      <div class="about__statistics__number d-flex mb-2">
        <div class="homepage__statistics__counter">50</div>
        <div class="homepage__statistics__plus">+</div>
      </div>
      <div class="homepage__statistics__title">Happy Clients</div>
    </div>
    <div class="about__statistics__box">
      <div class="about__statistics__number d-flex mb-2">
        <div class="homepage__statistics__counter">80</div>
        <div class="homepage__statistics__plus">+</div>
      </div>
      <div class="homepage__statistics__title">Company Awards</div>
    </div>
  </div>
</section>