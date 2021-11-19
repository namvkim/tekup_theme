<section class="d-flex justify-content-center px-3">
  <img src="<?php echo get_template_directory_uri() ?>/images/background_dot3d.gif" alt="" class="project__background" />
  <div class="project__content">
    <div class="
            project__header
            d-flex
            justify-content-center
            align-items-center
          ">
      Dự án nổi bật
    </div>
    <div class="d-flex justify-content-between flex-wrap">
     
        <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 15,
        'category_name'=>'project',
        'orderby' => 'date',
        'order'=>'desc',
          );

          $loop = new wp_Query($args);

          while($loop->have_posts()) : $loop->the_post();
          echo ' <div class="project__body__item">';
            echo '<div class="project__body__item__img">';
              echo '<a href="'.get_permalink().'">';
              echo get_the_post_thumbnail($post->ID, 'category-thumb');
              echo '</a>';
            echo '</div>';
              the_title( '<div class="project__body__item__title">', '</div>' );
              echo '<div class="project__body__item__subtitle">'.the_content().'</div>'; 
              echo '</div>';
          endwhile;
          wp_reset_query(); ?>
      <!-- <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item1.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item2.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">AI Plan Chedule</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item3.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item4.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item5.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item6.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item7.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item8.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div>
      <div class="project__body__item">
        <div class="project__body__item__img">
          <a href="project_details.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/project_item9.png" alt="" />
          </a>
        </div>
        <div class="project__body__item__title">Boxgo Fulfilment</div>
        <div class="project__body__item__subtitle">UI/UX Design</div>
      </div> -->
    </div>
    <div class="d-flex justify-content-center">
      <div class="project__footer__button">TẢI THÊM</div>
    </div>
  </div>
</section>
