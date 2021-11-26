<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-tekup
 */

?>
<footer>
  <section class="footer__container d-flex justify-content-center px-3">
    <div class="footer__content">
      <div class="footer__main row m-0">
        <div class="footer__main__contact col-lg-5 p-0">
          <div class="pb-3 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri() ?>/images/mini-logo.svg" alt="" />
          </div>
          <div class="py-3">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon_email.svg" alt="" />
            <span class="ms-3">info@tekup.com</span>
          </div>
          <div class="pb-3 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon_phone.svg" alt="" />
            <span class="ms-3">+84 XXX XXX</span>
          </div>
          <div class="d-flex align-items-start">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon_location.svg" alt="" />
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
            <img src="<?php echo get_template_directory_uri() ?>/images/icon_facebook.svg" alt="" />
          </a>
          <a href="#"><img class="ms-3" src="<?php echo get_template_directory_uri() ?>/images/icon_twitter.svg" alt="" /></a>
          <a href="#"><img class="ms-3" src="<?php echo get_template_directory_uri() ?>/images/icon_instagram.svg" alt="" /></a>
          <a href="#"><img class="ms-3" src="<?php echo get_template_directory_uri() ?>/images/icon_youtobe.svg" alt="" /></a>
        </div>
      </div>
    </div>
  </section>
</footer>
<?php wp_footer(); ?>

</body>
<!-- gallery modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<!-- ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.1.2/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
  <!-- bootstrap 5 -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
</html>